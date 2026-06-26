<?php

require_once __DIR__ . '/BaseModel.php';

const DELIVERY_COSTS = 4.99;

class Cart extends BaseModel
{
    private array $cart;

    /**
     * Get the current state of the cart. If no session is found or array is empty, the cart is empty.
     */
    public function __construct(PDO $db)
    {
        // Add DB to the class
        parent::__construct($db);

        if (isset($_SESSION['cart'])) {
            $this->cart = $_SESSION['cart'];
        } else {
            $this->cart = [];
        }
    }

    /**
     * Get all items in the cart
     * @return array The cart
     */
    public function all(): array
    {
        return $this->cart;
    }

    /**
     * Add an item to the cart by name of the product. If the product already is in the cart, add to quantity count
     */
    public function addToCart(string $productName): void
    {
        // Check if already in session
        $key = array_search($productName, array_column($this->cart, 'name'));

        if ($key !== false) {
            // If it already exists, add the quantity count
            $this->cart[$key]['quantity']++;
            $_SESSION['cart'] = $this->cart;
            return;
        }

        $stmt = $this->db->prepare("SELECT TOP 1 * FROM Product WHERE name = :name");
        $stmt->execute(['name' => $productName]);
        $product = $stmt->fetch();

        if (!$product) {
            throw new Exception('Dit product bestaat niet.');
        }

        $product['quantity'] = 1; // Add quantity to the product

        $this->cart[] = $product;
        $_SESSION['cart'] = $this->cart;
    }

    /**
     * Remove an item from the cart by product name.
     * @return void
     */
    public function removeFromCart(string $productName): void
    {
        $key = array_search($productName, array_column($this->cart, 'name'));

        if ($key !== false) {
            unset($this->cart[$key]);
            $this->cart = array_values($this->cart); // reindex array
            $_SESSION['cart'] = $this->cart;
        }
    }

    /**
     * Update the quantity of the products if the user requests it.
     * @return void
     */
    public function updateQuantity(string $productName, int $quantity): void
    {
        $key = array_search($productName, array_column($this->cart, 'name'));

        if ($key !== false) {
            if ($quantity <= 0) {
                $this->removeFromCart($productName);
            } else {
                $this->cart[$key]['quantity'] = $quantity;
                $_SESSION['cart'] = $this->cart;
            }
        }
    }

    /**
     * Get the subtotal without delivery costs.
     * @return float
     */
    public function getSubtotal(): float
    {
        $subtotal = 0.0;
        foreach ($this->cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        return $subtotal;
    }

    /**
     * Get the total price with delivery costs.
     */
    public function getTotal(): float
    {
        if (empty($this->cart)) {
            return 0.0;
        }
        return $this->getSubtotal() + DELIVERY_COSTS;
    }

    /**
     * Remove all items from the cart.
     * @return void
     */
    public function clear(): void
    {
        $this->cart = [];
        unset($_SESSION['cart']);
    }
}

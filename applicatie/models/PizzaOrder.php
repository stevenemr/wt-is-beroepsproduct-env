<?php

require_once __DIR__ . '/BaseModel.php';

class PizzaOrder extends BaseModel
{
    /**
     * Get all of the orders with products and quantity.
     * @return array
     */
    public function all(): array
    {
        $orders = [];
        $ordersRaw = $this->db->query('
            SELECT * FROM Pizza_Order po 
            JOIN Pizza_Order_Product pop ON po.order_id = pop.order_id
        ')->fetchAll();

        foreach ($ordersRaw as $orderRaw) {
            $orderId = $orderRaw['order_id'];

            // If not yet added to orders array
            if (!isset($orders[$orderId])) {
                $orders[$orderId] = [
                    'client_username'    => $orderRaw['client_username'],
                    'client_name'        => $orderRaw['client_name'],
                    'personnel_username' => $orderRaw['personnel_username'],
                    'datetime'           => $orderRaw['datetime'],
                    'status'             => $orderRaw['status'],
                    'address'            => $orderRaw['address'],
                    'products'           => []
                ];
            }

            // Add the prodcut for each in the order
            $orders[$orderId]['products'][] = [
                'product_name' => $orderRaw['product_name'],
                'quantity'     => $orderRaw['quantity']
            ];
        }

        return $orders;
    }


    /**
     * Get all orders for a specific username.
     *
     * @param  string $username
     * @return array
     */
    public function getByUsername(string $username): array
    {
        $orders = [];
        $stmt = $this->db->prepare('
            SELECT * FROM Pizza_Order po 
            JOIN Pizza_Order_Product pop ON po.order_id = pop.order_id
            WHERE po.client_username = :username
            ORDER BY po.datetime DESC
        ');
        $stmt->execute(['username' => $username]);
        $ordersRaw = $stmt->fetchAll();

        foreach ($ordersRaw as $orderRaw) {
            $orderId = $orderRaw['order_id'];

            if (!isset($orders[$orderId])) {
                $orders[$orderId] = [
                    'order_id'          => $orderId,
                    'client_username'    => $orderRaw['client_username'],
                    'client_name'        => $orderRaw['client_name'],
                    'personnel_username' => $orderRaw['personnel_username'],
                    'datetime'           => $orderRaw['datetime'],
                    'status'             => $orderRaw['status'],
                    'address'            => $orderRaw['address'],
                    'products'           => []
                ];
            }

            $orders[$orderId]['products'][] = [
                'product_name' => $orderRaw['product_name'],
                'quantity'     => $orderRaw['quantity']
            ];
        }

        return $orders;
    }


    /**
     * Get all orders for today.
     *
     * @return array
     */
    public function getTodaysOrders(): array
    {
        $orders = [];
        $stmt = $this->db->prepare('
            SELECT * FROM Pizza_Order po 
            JOIN Pizza_Order_Product pop ON po.order_id = pop.order_id
            WHERE CAST(po.datetime AS DATE) = CAST(GETDATE() AS DATE)
            ORDER BY po.datetime ASC
        ');
        $stmt->execute();
        $ordersRaw = $stmt->fetchAll();

        foreach ($ordersRaw as $orderRaw) {
            $orderId = $orderRaw['order_id'];

            if (!isset($orders[$orderId])) {
                $orders[$orderId] = [
                    'order_id'          => $orderId,
                    'client_username'    => $orderRaw['client_username'],
                    'client_name'        => $orderRaw['client_name'],
                    'personnel_username' => $orderRaw['personnel_username'],
                    'datetime'           => $orderRaw['datetime'],
                    'status'             => $orderRaw['status'],
                    'address'            => $orderRaw['address'],
                    'products'           => []
                ];
            }

            $orders[$orderId]['products'][] = [
                'product_name' => $orderRaw['product_name'],
                'quantity'     => $orderRaw['quantity']
            ];
        }

        return $orders;
    }


    /**
     * Add a order to the Pizza_Order and Pizza_Order_Product tables.
     *
     * @param  string $clientName
     * @param  string $address
     * @param  array $order
     * @param  string $clientUsername (optional)
     * @return void
     */
    public function addOrder(string $clientName, string $address, array $order, ?string $clientUsername = null): void
    {
        // Personnel username is required, even though not used, so I always add abrouwer as user
        $stmt = $this->db->prepare("INSERT INTO Pizza_Order (client_username, client_name, personnel_username, datetime, status, address)
        VALUES (:client_username, :client_name, 'abrouwer', GETDATE(), 1, :address)
        ");

        $stmt->execute(['client_username' => $clientUsername, 'client_name' => $clientName, 'address' => $address]);

        // Add foreach order to the database
        $orderId = $this->db->lastInsertId();

        $stmt = $this->db->prepare("INSERT INTO Pizza_Order_Product (order_id, product_name, quantity)
            VALUES (:order_id, :product_name, :quantity)
            ");

        foreach ($order as $orderItem) {
            $stmt->execute(['order_id' => $orderId, 'product_name' => $orderItem['name'], 'quantity' => $orderItem['quantity']]);
        }
    }
}

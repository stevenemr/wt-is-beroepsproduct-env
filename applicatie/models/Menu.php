<?php

require_once __DIR__ . '/BaseModel.php';

class Menu extends BaseModel
{
    /**
     * Get all products with ingredients.
     * @return array
     */
    public function all(): array
    {
        return $this->db->query("
            SELECT p.name, p.price, p.type_id, pi.ingredient_name 
            FROM Product p 
            LEFT JOIN Product_Ingredient pi ON p.name = pi.product_name
        ")->fetchAll();
    }

    /**
     * Get all products with ingredients, grouped by categories.
     * @return array
     */
    public function getByCategories(): array
    {
        $menu = [];
        $menuItems = $this->all();

        foreach ($menuItems as $menuItem) {
            $typeId = $menuItem['type_id'];
            $productName = $menuItem['name'];

            if (!isset($menu[$typeId][$productName])) {
                // First time we see this product, set it up
                $menu[$typeId][$productName] = $menuItem;
                $menu[$typeId][$productName]['ingredients'] = [];
            }

            // Add the ingredient if there is a ingredient
            if ($menuItem['ingredient_name']) {
                $menu[$typeId][$productName]['ingredients'][] = $menuItem['ingredient_name'];
            }
        }

        return $menu;
    }
}

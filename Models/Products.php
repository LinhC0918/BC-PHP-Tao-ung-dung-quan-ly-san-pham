<?php

class Products
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $producer;

    function __construct($id = null, $name = null, $price = null, $description = null, $producer = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->producer = $producer;
    }

    function getProductList()
    {
        return [
            new Products(1, 'Skirt', 230000, 'Váy', 'Vietnam'),
            new Products(2, 'Coat', 120000, 'Áo khoác', 'USA'),
            new Products(3, 'Dress', 550000, 'Đầm', 'China'),
            new Products(4, 'T-Shirt', 990000, 'Áo phông', 'Japan'),
        ];
    }

    function getProduct($id)
    {
        $productsList = $this->getProductList();
        foreach ($productsList as $product) {
            if ($product->id == $id) {
                return $product;
            }
        }
    }
}
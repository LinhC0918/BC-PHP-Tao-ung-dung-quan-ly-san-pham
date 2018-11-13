<?php

require __DIR__ . '/../Models/Products.php';

class ProductController
{
    private $control;

    function __construct()
    {
        $this->control = new Products();
    }

    function invoke()
    {
        if (!isset($_GET['id'])) {
            $products = $this->control->getProductList();
            include __DIR__ . '/../Views/productList.php';
        } else {
            $product = $this->control->getProduct($_GET['id']);
            include __DIR__ . '/../Views/product.php';
        }
    }
}
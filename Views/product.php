<?php
if (!$product) {
    echo 'No products found!';
} else {
    echo $product->id . ' - ' . $product->name . ' - ' . $product->price . ' - ' . $product->description . ' - ' . $product->producer;
}
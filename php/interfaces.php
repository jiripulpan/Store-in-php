<?php
interface Database {
    public function __constructor($connection);
}
interface User { // implements Database to use $connection
    public function login($email, $password);
    public function register($email, $password, $address, $psc, $city);
    public function addToCart($item);
    public function removeFromCart($item);
    public function orderCartItems();
}
interface Items { // implements Database to use $connection
    public function getItems();
    public function addItem($name, $description);
    public function removeItem($name);
    public function addVariant($color, $price, $size);
    public function removeVariant($name, $color, $price, $size);
}
?>
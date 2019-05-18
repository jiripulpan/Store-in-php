<?php
interface Database {
    public function __construct($dsn, $username, $password, $options);
    public function run($sql, $args = NULL);
}
interface User {
    public function login($email, $password);
    public function register($email, $password, $address, $psc, $city);
    public function addToCart($item);
    public function removeFromCart($item);
    public function orderCartItems();
}
interface Items {
    public function getItems();
    public function addItem($name, $description);
    public function removeItem($name);
    public function addVariant($name, $color, $price, $size);
    public function removeVariant($name, $color, $price, $size);
}
interface Orders {
    public function getIndividualOrders();
}
?>
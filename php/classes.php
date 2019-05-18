<?php
require 'interfaces.php';
/* 
Use of PDO  - Switching databases and platforms is fairly painless
            - SQL injection treatment
*/
class DatabaseClass extends PDO implements Database {
    public function __construct($dsn, $username, $password, $options = []) {
        $default_options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        $options = array_merge($default_options, $options);
        parent::__construct($dsn, $username, $password, $options);
    }
    public function run($sql, $args = NULL) {
        $stmt = $this->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}
class UserClass implements User { // implements User as Interface
    private $database = null, $table = 'users';
    public $email, $city, $address, $psc;
    public $cart;
    public function __construct(Database $database) {
        $this->database = $database;
    }
    public function login($email, $password) {
        // Hash password
        
        // Look DB for $email and $password

        // Exists then create session and set vars

        // Doesnt exist then show message

    }
    public function register($email, $password, $address, $psc, $city) {
        // Hash password
        $passwordhash = password_hash($password);
        // Look DB for $email
        $returnedStmt = $this->database->run('SELECT * FROM ' . $this->table . ' (email) VALUES (?)', $email);
        // Exists then show message

        // Doesnt exist then insert into Table, create session and set vars

    }
    public function addToCart($item) {
        // In cart then add one more of this product

        // Not in cart then add

    }
    public function removeFromCart($item) {
        // In cart then remove from cart

        // Not in cart then do nothing

    }
    public function orderCartItems() {
        // Cart have products then insert into Table new order

        // Cart dont have products then show message

    }
}
class ItemsClass implements Items { // implements Items as Interface
    private $database = null, $table = 'items';
    public function __construct(Database $database) {
        $this->database = $database;
    }
    public function getItems() {
        // Select items from Table
        $returnedStmt = $this->database->run('SELECT * FROM ' . $this->table . '');
        // return items
        return $returnedStmt->fetchAll();
    }
    public function addItem($name, $description) {
        // Select Item from Table
        
        // Exists then show message

        // Doesnt exist then Iinsert Item into Items Table

    }
    public function removeItem($name) {
        // Select Item from Table

        // Exists then delete from Table

        // Doesnt exist then show message
        
    }
    public function addVariant($name, $color, $price, $size) {
        // Select Item from DB

        // Exists then show message

        // Doesnt exist then insert into variants Table
        
    }
    public function removeVariant($name, $color, $price, $size) {
        // Select Item from DB

        // Exists then delete variant from Table by $name, $color, $price, $size

        // Doesnt exist then insert into variants Table
        
    }
}
class OrdersClass implements Orders {
    private $database = null, $table = 'orders';
    public function __construct(Database $database) {
        $this->database = $database;
    }
    public function getIndividualOrders() {
        $stmt = $this->database->run('SELECT * FROM ' . $this->table . ' INNER JOIN users ON users.id = orders.userid INNER JOIN variants ON variants.id = orders.variantid INNER JOIN items ON items.id = variants.itemid');
        return $stmt;
    }
}
?>
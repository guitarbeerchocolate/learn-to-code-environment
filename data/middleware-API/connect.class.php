<?php
class connect {    
    // public $data;
    public $conn;
    function __construct() {
        $this->conn = new PDO('mysql:host=backend;port=3306;dbname=acme', 'root', 'password');
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
?>
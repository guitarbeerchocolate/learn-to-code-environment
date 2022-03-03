<?php
class users extends connect {
    public $data;
    function __construct() {
        parent::__construct();        
        $this->data = [];
        $stmt = $this->conn->prepare("SELECT * FROM users");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $key => $row) {            
            array_push($this->data, $row);
        }
    }
}
?>
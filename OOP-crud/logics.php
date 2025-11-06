<?php
include("./config/db_connection.php");

class Logics {
    private $con;
    public function __construct(){
    $db = new Connection();

    $this->con = $db->getConnection();
    }

    public function create($name, $message){
        $insert_query = "INSERT INTO users(name, message) VALUES('$name', '$message')";
        $result = $this->con->prepare($insert_query);
        $result->execute();

        header("location: create.php");
    }
}
?>
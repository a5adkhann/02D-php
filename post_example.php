<?php

include("./config/db_connection.php");

if(isset($_POST['POSTbtn'])){
    $name = $_POST['name'];
    $message = $_POST['message'];

    // echo "Name is ". $name . "and message is " . $message;
    $insert_query = "INSERT INTO users(name, message) VALUES('$name', '$message')";
    $execute = mysqli_query($connection, $insert_query);

    if($execute){
        echo "Data inserted successfully";
    }
    else {
        echo "Error inserting";
    }
}







?>
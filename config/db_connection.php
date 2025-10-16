<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "02d-crud";

$connection = mysqli_connect($host, $username, $password, $db);

if($connection){
    echo "DB Connected Successfully";
}
else {
    echo "Error Occuring";
}

?>
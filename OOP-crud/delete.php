<?php
include("./logics.php");

$db = new Logics();

$db->delete($_GET['id']);
?>
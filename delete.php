<?php
require 'conn.php';
require 'users.php';

$id = $_GET['id'];




   
    $user = new users(null, "", "", "", "", "", "", "", "");
    $user->delete($pdo,$id);
    header("location:usersList.php");

?>

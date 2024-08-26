<?php
require_once("connection/connection.php");

$id = $_GET["id"];

$result = mysqli_query($connection , "DELETE FROM products WHERE id=$id");

if($result){
    header("Location: all_products.php");
}else{
    mysqli_error($connection);
}
?>
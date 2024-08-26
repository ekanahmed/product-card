<?php

require_once "connection/connection.php";

$product_name = $_POST["product_name"];
$product_category = $_POST["category"];
$product_price = $_POST["price"];
$product_quantity = $_POST["quantity"];
$product_date = $_POST["added_date"];

// echo "<pre>";

// print_r($_POST);

$mysql_insert = "INSERT INTO products (`product_name`, category, price, quantity, `added_date`) 
values ('$product_name' , '$product_category', $product_price, $product_quantity, '$product_date')";

$result = mysqli_query($connection, $mysql_insert);

if ($result) {
    header("Location: all_products.php");
} else {
    // mysqli_error();
    echo "Can't insert data";
}

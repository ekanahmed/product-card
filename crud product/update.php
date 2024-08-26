<?php
require_once "connection/connection.php";
$id=$_POST['id'];
$product_name=$_POST['product_name'];
$category=$_POST['category'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];

$sql = "UPDATE products SET product_name='$product_name',category='$category',price='$price',quantity='$quantity';";
$result=mysqli_query($connection,$sql);
if($result){
    header("location:index.php");
}else{
    echo "error to update";
}
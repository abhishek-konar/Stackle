<?php 
error_reporting(0);
session_start();
$email=$_SESSION['em'];

// Function for Product Add
$id=$_GET['id'];
$c=mysqli_connect('localhost', 'root', '', 'abhishek');
$query="SELECT * FROM product WHERE id='$id'";
$run=mysqli_query($c, $query);
$rsl=mysqli_fetch_assoc($run);
$product_name=$rsl['name'];
$image_name=$rsl['image_name'];
$price=$rsl['price'];
$qur="INSERT INTO cart (email, item_neme, price, image_name) VALUE ('$email', '$product_name', '$price', '$image_name')";
if($product_name)
{
  $add=mysqli_query($c, $qur);
  echo "<script>window.location.href='books.php' </script>";
}

?>
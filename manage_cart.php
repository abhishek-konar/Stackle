<?php 
include ('./connection.php');
error_reporting(0);
session_start();
$email=$_SESSION['em'];
$id=$_GET['id'];

// Function for Product Add
$query="SELECT * FROM product WHERE id='$id'";
$run=mysqli_query($connect, $query);
$rsl=mysqli_fetch_assoc($run);
$product_name=$rsl['name'];
$image_name=$rsl['image_name'];
$price=$rsl['price'];
$product_type=$rsl['product_type'];
$check=mysqli_num_rows(mysqli_query($connect, "SELECT * FROM cart WHERE email='$email' AND id='$id'"));
if($check>0){
  if($product_type=='Book')
  {
    echo "<script>alert('Alredy added in Yours Cart')</script>";
    echo "<script>window.location.href='books.php' </script>";
  }
  if($product_type=='Mobile')
  {
    echo "<script>alert('Alredy added in Yours Cart')</script>";
    echo "<script>window.location.href='mobile_accessory.php' </script>";
  }
}
else{
  $qty="1";
  $qur="INSERT INTO cart (id, email, item_neme, price, image_name, qty) VALUE ('$id', '$email', '$product_name', '$price', '$image_name', '$qty')";
if($product_name)
{
  $add=mysqli_query($connect, $qur);

  if($product_type=='Book')
  {
    echo "<script>alert('Added in yours cart')</script>";
    echo "<script>window.location.href='books.php' </script>";
  }
  if($product_type=='Mobile')
  {
    echo "<script>alert('Added in yours cart')</script>";
    echo "<script>window.location.href='mobile_accessory.php' </script>";
  }
}
}

// Function for Delete Product
$token=$_GET['token'];
$ql="DELETE FROM cart WHERE email='$email' AND id='$token'";
$run=mysqli_query($connect, $ql);
if($run){
    echo "<script>window.location.href='mycart.php' </script>";
}
else{
    echo "Record faild";
}
?>

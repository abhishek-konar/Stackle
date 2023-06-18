<?php 
include ('./connection.php');
error_reporting(0);
session_start();
$id=$_GET['id'];
$email=$_SESSION['em'];
$address_type='Defult';
$ql="UPDATE `address` SET `address_type`='$address_type' WHERE id=$id";
$q="UPDATE `address` SET `address_type`='No' WHERE email='$email' AND `address_type`='$address_type'";
$res=mysqli_query($connect, $q);
$run=mysqli_query($connect, $ql);
if($run){
    echo "<script>window.location.href='address.php' </script>";
}
else{
    echo "Record faild";
}
?>
<?php  
error_reporting(0);
include ('./connection.php');
$id=$_GET['id'];
$ql="DELETE FROM address WHERE id='$id'";
$run=mysqli_query($connect, $ql);
if($run){
    echo "<script>window.location.href='address.php' </script>";
}
else{
    echo "Record faild";
}
?>


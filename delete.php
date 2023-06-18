<?php  
error_reporting(0);
$id=$_GET['id'];
$cont=mysqli_connect('localhost', 'root', '', 'abhishek');
$ql="DELETE FROM address WHERE id='$id'";
$run=mysqli_query($cont, $ql);
if($run){
    echo "<script>window.location.href='address.php' </script>";
}
else{
    echo "Record faild";
}
?>


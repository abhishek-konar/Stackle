<?php include ('./server.php'); ?>
  

<?php
error_reporting(0);
session_start();
$email=$_SESSION['em'];
$pass=$_SESSION['pa'];
$c=mysqli_connect('localhost', 'root', '', 'abhishek');
$q="SELECT * FROM user WHERE email='$email'AND pasword='$pass'";
$res=mysqli_query($c, $q);
if(mysqli_num_rows($res)==0)
{
    session_start();
    session_destroy();
    header('location:login.php');
}
?>
<div class="content">
    <?php
while($row=mysqli_fetch_assoc($res)){
    echo "<p class='big'>Hellow ".$row["name"]. "</p>";
}
?>
</div>

<?php include ('./server.php');
include ('./connection.php');
error_reporting(0);
session_start();
$email=$_SESSION['em'];

$c=mysqli_connect('localhost', 'root', '', 'abhishek');
$q="SELECT * FROM user WHERE email='$email'AND password='$pass'";
$res=mysqli_query($c, $q);


//Function to get name
while($row=mysqli_fetch_assoc($res)){
    $mobile=$row["mobile"];
}


?>

<section class="box forms">
    <div class="form login">
        <div class="form-content">
            <header class="large">Change Mobile Number</header>
            <p class="mt-2 text-xl-start">By enrolling your mobile phone number, you consent to receive security notifications via text message from Stackle.</p>
                <form name="update" method="post" action=""> 
                    <div class="field input-field">
                        <input class="form-control" type="text"  name="number"  placeholder="Enter yours new number" maxlength="50">
                    </div>
                <div class="field button-field">
                    <button name="update">Save changes</button>
                </div>
                </form>
                <p style="color:red" id="myalert"></p>
            </div>
        </div>
</section>

<?php
if (isset($_POST['update'])){
    $number= $_POST['number'];
    $sql= "UPDATE `user` SET `mobile`='$number' WHERE email='$email'";
    $run=mysqli_query($connect, $sql);
    if($run){
      echo "<script>window.location.href='security.php' </script>";
    }
    
}
?>
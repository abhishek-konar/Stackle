<?php include ('./server.php');
include ('./connection.php');
error_reporting(0);
session_start();
$email=$_SESSION['em'];
?>

<section class="box forms">
    <div class="form login">
        <div class="form-content">
            <header class="large">Change Your Name</header>
                <p class="mt-2 text-xl-start">If you want to change the name associated with your Stackle account, you may do so below. Be sure to click the </p>
                <form name="update" method="post" action=""> 
                    <div class="field input-field">
                        <input class="form-control" type="text"  name="name"  placeholder="Full name (First and Last name)" maxlength="50">
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
    $name= $_POST['name'];
    if($name=="")
    {
        echo '<script>document.getElementById("myalert").innerHTML= "Enter your name" </script>';
    }
    else
    {
        $sql= "UPDATE `user` SET `name`='$name' WHERE email='$email'";
        $run=mysqli_query($connect, $sql);
        echo "<script>window.location.href='security.php' </script>";
    }
}
?>
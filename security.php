

<?php include ('./server.php');

error_reporting(0);
session_start();
$email=$_SESSION['em'];
$pass=$_SESSION['pa'];
$c=mysqli_connect('localhost', 'root', '', 'abhishek');
$q="SELECT * FROM user WHERE email='$email'AND password='$pass'";
$res=mysqli_query($c, $q);


//Function to get name
while($row=mysqli_fetch_assoc($res)){
    $name=$row["name"];
    $mobile=$row["mobile"];
}

?>

<div class="container p-4">
    <div class="card-header bg-light">
      <header class="text-left">Login & Security</header>
    </div>
    <div class="row ">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-2 ">
            <div class="card rounded-3 border border-1 border-secondary">
                <table class="table table-borderless">
                    <tbody class="text-center ">
                        <tr >
                            <td class="text-left border-2 border-bottom"> <?php echo "<p class='bold'>Name:</p> <p> $mobile</p>"?></td>
                            <td class="text-danger border-2 border-bottom"><a href="name_update.php"><button type="button" class="btn btn-primary">Edit</button></a></td>
                        </tr>
                        <tr>
                            <td class="text-left border-bottom"> <?php echo "<p class='bold'>Primary mobile number:</p> <p> $mobile</p>"?></td>
                            <td class="text-danger border-bottom"><a href="number_update.php"><button type="button" class="btn btn-primary">Edit</button></a></td>
                        </tr>
                        <tr >
                            <td class="text-left  border-bottom"> <?php echo "<p class='bold'>E-mail:</p> <p> $email</p>"?></td>
                            <td class="text-danger border-bottom"><button type="button" class="btn btn-primary">Edit</button</td>
                        </tr>
                            
                        <tr>
                            <td class="text-left"><?php echo "<p class='bold'>Password:</p> ******"?></td>
                            <td class="text-danger"><button type="button" class="btn btn-primary">Edit</button</td>
                        </tr>
                    </tbody>
                </table>
    </div>
</div>
</div>

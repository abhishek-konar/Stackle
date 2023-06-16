<?php include ('./index.php'); 
include ('./connection.php')
?>

<!--Insert Signup Form-->
<section class="box forms">
            <div class="form login">
                <div class="form-content">
                    <header>Sign up</header>
                    <form method="post" action="" name="register" onsubmit="return myfunc()"> 
                        <div class="field input-field">
                          <input class="textbox" class="input" type="text" name="name" placeholder="Name">
                        </div>
                        <div class="field input-field">
                          <input class="textbox" class="input" type="text" name="email" placeholder="Email">
                        </div>
                        <div class="field input-field">
                          <input class="password" type="password" name="pass" placeholder="Password">
                        </div>
                        <div class="field input-field">
                          <input class="password" type="password" name="con_pass" placeholder="Confirm Password">
                        </div>
                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>
                        <div class="field button-field">
                            <button name="register">Sign up</button>
                        </div>
                    </form>
                    <div class="form-link">
                        <span>Don't have an account? <a href="signup.php" class="link signup-link">Signup</a></span>
                    </div>
                    <p style="color:red" id="myalert"></p>
                </div>
            </div>
        </section>


<!--Insert Sign up Details-->
<?php 
    error_reporting (0);
    if(isset ($_POST['register'])){
      $name= $_POST['name'];
      $email=$_POST['email'];
      $pass=$_POST['pass'];
      $con_pass=$_POST['con_pass'];
      $ac_type="User";
      $check=mysqli_num_rows(mysqli_query($connect, "SELECT * FROM user WHERE email='$email'"));
      if($check>0){
        echo '<script>document.getElementById("myalert").innerHTML= "Email id alredy register" </script>';
        mysqli_close($connect);
      }
      elseif($con_pass!=$pass)
      {
        echo '<script>document.getElementById("myalert").innerHTML= "Paswords does not Match" </script>';
        mysqli_close($connect);
      }
      else{
        $sql="INSERT INTO user (name, email, password, ac_type) VALUE ('$name', '$email', '$pass', '$ac_type')";
        $run=mysqli_query($connect, $sql);
          session_start();
          $_SESSION['em']=$email;
          $_SESSION['pa']=$pass;
        echo "<script>window.location.href='dashboard.php' </script>";
      }
    }
  ?>
</body>
</html>

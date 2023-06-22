<?php 
error_reporting (0);
include ("./navbar.php");
include ('./connection.php')
?>
<!--Insert Signup Form-->
<section class="box forms">
            <div class="form login">
                <div class="form-content">
                    <header class="large">Sign up</header>
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
                        <span>Existing User? <a href="login.php" class="link signup-link">login</a></span>
                    </div>
                    <p style="color:red" id="myalert"></p>
                </div>
            </div>
        </section>


<!--Insert Sign up Details-->
<?php 
    if(isset ($_POST['register'])){
      $name= $_POST['name'];
      $email=$_POST['email'];
      $pass=md5($_POST['pass']);
      $con_pass=md5($_POST['con_pass']);
      $ac_type="User";
      $mobile="Defult";
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
        $sql="INSERT INTO user (name, email, password, ac_type, mobile) VALUE ('$name', '$email', '$pass', '$ac_type', '$mobile')";
        $run=mysqli_query($connect, $sql);
          session_start();
          $_SESSION['em']=$email;
          $_SESSION['pa']=$pass;
          if($ac_type=="User")
          {
            echo "<script>window.location.href='dashboard.php' </script>";
          }
      }
    }
  ?>
</body>
</html>

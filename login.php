<?php include ("./navbar.php");
include ('./connection.php');
?>

<body>
<section class="box forms">
            <div class="form login">
                <div class="form-content">
                    <header class="large">Login</header>
                    <form method="post" action="" name="register" onsubmit="return myfunc()"> 
                        <div class="field input-field">
                        <input class="input" type="text" name="email" placeholder="Email">
                        </div>
                        <div class="field input-field">
                        <input  class="password" type="password" name="pass" placeholder="Password">
                        </div>
                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>
                        <div class="field button-field">
                            <button name="register">Login</button>
                        </div>
                    </form>
                    <div class="form-link">
                        <span>Don't have an account? <a href="signup.php" class="link signup-link">Signup</a></span>
                    </div>
                    <p style="color:red" id="myalert"></p>
                </div>
            </div>
        </section>


 <!--Login Form-->
  <?php 
    error_reporting (0);
    if(isset ($_POST['register'])){
      $email=$_POST['email'];
      $pass=md5($_POST['pass']);
      $sql="SELECT * FROM user WHERE email='$email'";
      $res=mysqli_query($connect, $sql);
      $flag=0;
      while($col=mysqli_fetch_array($res)){
        if($email==$col[1] && $pass==$col[2]){
          session_start();
          $_SESSION['em']=$email;
          $_SESSION['pa']=$pass;
          $flag++;
          if($col['ac_type']=="User")
         {
          echo "<script>window.location.href='dashboard.php' </script>";
          $res=$connect->querry($sql);
         }
         if($col['ac_type']=="Creator")
         {
          echo "<script>window.location.href='admin.php' </script>";
          $res=$connect->querry($sql);
         }
        }
      }
      if($flag==0){
        echo '<script>document.getElementById("myalert").innerHTML= "Username or Password invalid" </script>';
        mysqli_close($connect);
      }
    }
  ?>
</body>
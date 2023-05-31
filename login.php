<?php include ("./index.php");?>

<body>
<form method="post" action="" name="register" onsubmit="return myfunc()">       
    <div class="box">
          <p class="large">Log in</p>
          <input class="textbox" type="text" name="email" placeholder="Email">
          <input class="textbox"  type="password" name="pass" placeholder="Password">
          <p style="color:red" id="myalert"></p>
          <a href="signup.php" style="text-decoration: none;"> <span style="color:black;">No account?</span> Create one!</a>
          <input type="submit" value="Next" class="submit" name="register">
    </div>
  </form>

 <!--Login Form-->
  <?php 
    error_reporting (0);
    if (isset ($_POST['register'])){
      $con=mysqli_connect('localhost', 'root', '', 'abhishek');
    }
    if($con){
      $email=$_POST['email'];
      $pass=$_POST['pass'];
      $sql="SELECT * FROM user WHERE email='$email'";
      $res=mysqli_query($con, $sql);
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
          $r=$con->querry($sql);
         }
         if($col['ac_type']=="Creator")
         {
          echo "<script>window.location.href='admin.php' </script>";
          $r=$con->querry($sql);
         }
        }
      }
      if($flag==0){
        echo '<script>document.getElementById("myalert").innerHTML= "Username or Password invalid" </script>';
        mysqli_close($con);
      }
    }
  ?>
</body>
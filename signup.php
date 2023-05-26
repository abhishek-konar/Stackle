<?php include ('./index.php'); ?>

<!--Insert Signup Form-->
<form  name="register" method="post" action="" onsubmit="return myfunc()">    
    <div class="box">
          <p class="large">Sign Up</p>
          <input class="textbox"  type="text" name="name" placeholder="Name">
          <input class="textbox" type="text" name="email" placeholder="Email, phone, or Skype">
          <input class="textbox"  type="password" name="pass" placeholder="Password">
          <p style="color:red" id="myalert"></p>
          <input type="submit" value="Next" class="submit" name="register">
    </div>
  </form>
  

<!--Insert Sign up Details-->
<?php 
    error_reporting (0);
    if (isset ($_POST['register'])){
      $con=mysqli_connect('localhost', 'root', '', 'abhishek');
    }
    if($con){
      $name= $_POST['name'];
      $email=$_POST['email'];
      $pass=$_POST['pass'];
      $sql="INSERT INTO user (name, email, pasword) VALUE ('$name', '$email', '$pass')";
      $run=mysqli_query($con, $sql);
    }
  ?>
</body>
</html>

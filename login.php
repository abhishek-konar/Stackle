<?php include ("./index.php");?>


<body>
<form method="post" action="" >    
    <div class="wraper">
          <p class="p1">Login</p>
          <input class="textbox"  type="text" name="email" placeholder="Email">
          <input class="textbox"  type="password" name="pass" placeholder="Password">
          <p style="color:red" id="myalert"></p>
          <input type="submit" value="Login" class="submit" name="login">
    </div>
</form>



 
  <?php 
    error_reporting (0);
    if (isset ($_POST['login'])){
      $con=mysqli_connect('localhost', 'root', '', 'abhishek');
    }
    if($con){
      $email=$_POST['email'];
      $pass=$_POST['pass'];
      $sql="SELECT * FROM user";
      $run=mysqli_query($con, $sql);
      $res=mysqli_query($con, $sql);
      $flag=0;
      while($col=mysqli_fetch_array($res)){
        if($email==$col[1] && $pass==$col[2]){
          session_start();
          $_SESSION['em']=$email;
          $_SESSION['pa']=$pass;
          $flag++;
          echo "<script>window.location.href='dashboard.php' </script>";
          $r=$con->querry($sql);
        }
      }
      if($flag==0){
        echo '<script>document.getElementById("myalert").innerHTML= "Username or Password invalid" </script>';
        mysqli_close($con);
      }
    }
  ?>

</body>
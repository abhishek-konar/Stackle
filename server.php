
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--For Stylesheet-->
    <link rel="stylesheet"  href="./style/global.css"/>
    <link rel="stylesheet"  href="./style/card.css"/>
    <link rel="stylesheet"  href="./style/form.css"/>
    <link rel="stylesheet"  href="./style/navbar.css"/>
    
    <script src="myscripts.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <!--For Font Style-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish&family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&display=swap" rel="stylesheet">
  </head>
  
<body>

<!--For User Name-->
<?php
error_reporting(0);
session_start();
$email=$_SESSION['em'];
$pass=$_SESSION['pa'];
$c=mysqli_connect('localhost', 'root', '', 'abhishek');
$q="SELECT * FROM user WHERE email='$email'AND password='$pass'";
$res=mysqli_query($c, $q);
if(mysqli_num_rows($res)==0)
{
    session_start();
    session_destroy();
    header('location:login.php');
}

//Function to get name
while($row=mysqli_fetch_assoc($res)){
    $n=$row["name"];
}

//Function to get cart item numbers
$sql="SELECT * FROM cart WHERE email='$email'";
$run=mysqli_query($c, $sql);
$count_cart_items=mysqli_num_rows($run);
?>

<!-------------------Admin Navbar-------------------->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="dashboard.php">Stackle</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo "Hellow, ". $n; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="myaccount.php">My Account</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mycart.php"><img class="cart" src="https://img.icons8.com/fluency/48/shopping-cart.png" alt="shopping-cart"/><sup><?php echo $count_cart_items?></sup></a></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>











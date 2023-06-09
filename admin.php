<?php include ('./connection.php');?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snowlake</title>
    <link rel="icon" type="icon" href="./assets/logo.png">
     <!--For Stylesheet-->
     <link rel="stylesheet"  href="./style/global.css"/>
    <link rel="stylesheet"  href="./style/card.css"/>
    <link rel="stylesheet"  href="./style/form.css"/>
    <link rel="stylesheet"  href="./style/navbar.css"/>
     <!-- Script-->
    <script src="myscripts.js"></script>
     <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <!--For Font Style-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish&family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&display=swap" rel="stylesheet">

    
    <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
 
</head>
<body>

<!--For User Name-->
<?php
error_reporting(0);
session_start();
$email=$_SESSION['em'];
$pass=$_SESSION['pa'];
$q="SELECT * FROM user WHERE email='$email'AND password='$pass'";
$res=mysqli_query($connect, $q);
if(mysqli_num_rows($res)==0)
{
    session_start();
    session_destroy();
    header('location:login.php');
}
while($row=mysqli_fetch_assoc($res)){
    $name=$row["name"];
    $ac_type=$row["ac_type"];
}
?>

<!-------------------Admin Navbar-------------------->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="admin.php">Stackle</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
				<a class="nav-link" href="add_product.php" id="form-open">Add Product</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $ac_type. ", ". $name; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="client.php">Client</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mycart.php"><img class="cart" src="https://img.icons8.com/fluency/48/shopping-cart.png" alt="shopping-cart"/><sup><?php echo $count_cart_items?></sup></a></a>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>
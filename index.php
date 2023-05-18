<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<!-------------------Navbar-------------------->
<nav class="navbar navbar-expand-lg navbar-dark static-top">
		<div class="container p-0">
			<a class="navbar-brand" href="index.php">Stackle</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
      

  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav mr-auto">
      
      
          <li class="nav-item">
						<a class="nav-link" href="./login.php">Login</a>
          </li>
          <li class="nav-item">
						<a class="nav-link" href="./signup.php">Sign up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img class="cart" src="https://img.icons8.com/fluency/48/shopping-cart.png" alt="shopping-cart"/><sup>1</sup></a>
          </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-------------------Our Product-------------------->
<div class="container">

<h3 class="title"> Our products </h3>

<div class="products-container">

   <div class="product" data-name="p-1">
      <img src="assets/1.png" alt="">
      <h3>Grocery and gourmet</h3>
   </div>

   <div class="product" data-name="p-2">
      <img src="assets/2.png" alt="">
      <h3>Books</h3>
      
   </div>

   <div class="product" data-name="p-3">
      <img src="assets/3.png" alt="">
      <h3>Medicinal Product</h3>
   </div>

   <div class="product" data-name="p-4" >
      <img src="assets/4.png" alt="">
      <h3>Fashion</h3>
   </div>

</div>
</div>
</body>
</html>


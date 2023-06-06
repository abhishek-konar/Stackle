<?php include ('./server.php');
error_reporting(0);
session_start(); 
?>


<div class="pt-5 pb-5">
    <div class="container">
      <div class="row">
<!--All address Details-->
<?php
        error_reporting(0);
        session_start();
        $email=$_SESSION['em'];
        $c=mysqli_connect('localhost', 'root', '', 'abhishek');
        $q="SELECT * FROM product";
        $res=mysqli_query($c, $q);
        while($row=mysqli_fetch_assoc($res)){
          $name=$row['name'];
          $categories_id=$row['categories_id'];
          $price=$row['price'];
          $image_name=$row['image_name'];
          $description=$row['description'];

        echo 
        "<div class='col-lg-4 col-sm-6'>".
          "<div class='item'>".
          "<img src='./assets/books/".$image_name."'class='round'>".
            "<h6>". $name. "</h6>".
            "<p>".$description."</p>".
            "<p> Price: ".$price."</p>".
            "<p> Phone Number: ".$phone."</p>".
           "<a href='mycart.php?id=$row[id]' class='btn btn-warning mr-2'>Add to cart</a>".
           "<a href='#' class='btn btn btn-info'>View More</a>".
            "</div>
        </div>";       
}
?>
      </div>
    </div>
</div>
</body>



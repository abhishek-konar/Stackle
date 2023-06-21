<?php include ('./server.php');
include ('./connection.php');
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
        $q="SELECT * FROM product WHERE product_type='Book'";
        $res=mysqli_query($connect, $q);
        while($row=mysqli_fetch_assoc($res)){
          $name=$row['name'];
          $categories_id=$row['categories_id'];
          $price=$row['price'];
          $image_name=$row['image_name'];
          $s_description=$row['s_description'];
          $rating=$row['rating'];
          if($rating=="1")
          {
            $r="<img src='./assets/star.png'class='rating'>
            <img src='./assets/star_n.png'class='rating'>
            <img src='./assets/star_n.png'class='rating'>
            <img src='./assets/star_n.png'class='rating'>
            <img src='./assets/star_n.png'class='rating'>";
          }
          if($rating=="2")
          {
            $r="<img src='./assets/star.png'class='rating'>
                <img src='./assets/star.png'class='rating'>
                <img src='./assets/star_n.png'class='rating'>
                <img src='./assets/star_n.png'class='rating'>
                <img src='./assets/star_n.png'class='rating'>";
          }
          if($rating=="3")
          {
            $r="<img src='./assets/star.png'class='rating'>
                <img src='./assets/star.png'class='rating'>
                <img src='./assets/star.png'class='rating'>
                <img src='./assets/star_n.png'class='rating'>
                <img src='./assets/star_n.png'class='rating'>";
          }
          if($rating=="4")
          {
            $r="<img src='./assets/star.png'class='rating'>
                <img src='./assets/star.png'class='rating'>
                <img src='./assets/star.png'class='rating'>
                <img src='./assets/star.png'class='rating'>
                <img src='./assets/star_n.png'class='rating'>";
          }
          if($rating=="5")
          {
            $r="<img src='./assets/star.png'class='rating'>
                <img src='./assets/star.png'class='rating'>
                <img src='./assets/star.png'class='rating'>
                <img src='./assets/star.png'class='rating'>
                <img src='./assets/star.png'class='rating'>";
          }

        echo 
        "<div class='col-lg-4 col-sm-6'>".
          "<div class='item'>".
          "<img src='./assets/books/".$image_name."'class='round'>".
            "<h6>". $name. "</h6>".
            "<h4  class='text-danger'>₹".$price."</h4>".
            "<p>".$r."</p>".
           "<a href='manage_cart.php?id=$row[id]' class='btn btn-warning mr-2'>Add to cart</a>".
           "<a href='view.php?id=$row[id]' class='btn btn btn-info'>View More</a>".
            "</div>
        </div>";       
}
?>
      </div>
    </div>
</div>
</body>

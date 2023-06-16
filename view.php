<?php include ('./server.php');
include ('./connection.php');
error_reporting(0);
session_start();
$email=$_SESSION['em'];
$id=$_GET['id'];
$query="SELECT * FROM product WHERE id='$id'";
$run=mysqli_query($connect, $query);
$rsl=mysqli_fetch_assoc($run);
$product_name=$rsl['name'];
$image_name=$rsl['image_name'];
$description=$rsl['description'];
$product_type=$rsl['product_type'];
$price=$rsl['price'];
$rating=$rsl['rating'];
?>

<<div class="container p-4">
    <div class="jumbotron">
        <div class="row">
            <div class="mb-4 col-xl-2 col-lg-3 col-md-4 col-sm-12 col-12">
                <div class="p-2">
                        <div class="entertainmentContainer pt-2"><img src="./assets/books/<?php echo $image_name?>" class="round" alt="img"></div>
                        <?php
                          if($rating=="1")
                          {
                            echo 
                            "<img src='./assets/star.png'class='r'>
                            <img src='./assets/star_n.png'class='r'>
                            <img src='./assets/star_n.png'class='r'>
                            <img src='./assets/star_n.png'class='r'>
                            <img src='./assets/star_n.png'class='r'>";
                          }
                          if($rating=="2")
                          {
                            echo
                              "<img src='./assets/star.png'class='r'>
                              <img src='./assets/star.png'class='r'>
                              <img src='./assets/star_n.png'class='r'>
                              <img src='./assets/star_n.png'class='r'>
                              <img src='./assets/star_n.png'class='r'>";
                          }
                          if($rating=="3")
                          {
                            echo 
                                "<img src='./assets/star.png'class='r'>
                                <img src='./assets/star.png'class='r'>
                                <img src='./assets/star.png'class='r'>
                                <img src='./assets/star_n.png'class='r'>
                                <img src='./assets/star_n.png'class='r'>";
                          }
                          if($rating=="4")
                          {
                            echo 
                                "<img src='./assets/star.png'class='r'>
                                <img src='./assets/star.png'class='r'>
                                <img src='./assets/star.png'class='r'>
                                <img src='./assets/star.png'class='r'>
                                <img src='./assets/star_n.png'class='r'>";
                          }
                          if($rating=="5")
                          {
                            echo 
                                "<img src='./assets/star.png'class='r'>
                                <img src='./assets/star.png'class='r'>
                                <img src='./assets/star.png'class='r'>
                                <img src='./assets/star.png'class='r'>
                                <img src='./assets/star.png'class='r'>";
                          }
                        
                        ?>
                <h4 class="text-danger mt-1"><?php echo '₹'. $price?></h4>
                </div>
            </div>
            <div class="col-xl-10 col-lg-9 col-md-8 col-sm-12 col-12">
                <p class="display-6 text-capitalize"><?php echo $product_name?></p>
                <p class="lead mt-3"><?php echo $description?></p>
                <a href="manage_cart.php?<?php echo 'id='.$id?>" class='btn btn btn-warning'>Add to Cart</a>
            </div>
        </div>
    </div>

<!--Display Smilar product-->
    <p class="lead text-center text-white mb-4">Similler Books</p>
    <div class="row">
      <?php
        $q="SELECT * FROM product WHERE product_type='$product_type' AND NOT id='$id' ";
        $res=mysqli_query($connect, $q);
        while($row=mysqli_fetch_assoc($res)){
          $name=$row['name'];
          $categories_id=$row['categories_id'];
          $price=$row['price'];
          $image_name=$row['image_name'];
          $s_description=$row['s_description'];
        echo 
        "<div class='col-lg-4 col-sm-6'>".
          "<div class='item'>".
              "<img src='./assets/books/".$image_name."'class='round'>".
              "<h6>". $name. "</h6>".
              "<p> Price: ".$price."</p>".
              "<a href='manage_cart.php?id=$row[id]' class='btn btn-warning mr-2'>Add to cart</a>".
              "<a href='view.php?id=$row[id]' class='btn btn btn-info'>View More</a>".
            "</div>
        </div>"; 
        }
      ?>
    </div>
</div>
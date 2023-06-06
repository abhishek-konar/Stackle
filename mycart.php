<?php include ('./server.php'); 
error_reporting(0);
session_start();
session_start();
$email=$_SESSION['em'];
?>

<body>
  <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-4">
            <header>Shopping Cart</header>
        </div>
        <div class="col-lg-9">
            <table class="table">
            <thead class="text-center">
                <tr>
                    <th scope="col"  class="bg-light"></th>
                    <th scope="col"  class="bg-light">Item Name</th>
                    <th scope="col"  class="bg-light">Price</th>
                    <th scope="col"  class="bg-light">Quantity</th>
                    <th scope="col"  class="bg-light"></th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                    $c=mysqli_connect('localhost', 'root', '', 'abhishek');
                    $q="SELECT * FROM cart WHERE email='$email'";
                    $res=mysqli_query($c, $q);
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $item_nem=$row['item_neme'];
                        $price=$row['price'];
                        $image_name=$row['image_name'];
                        $total=$total+$price;
                        echo 
                        "<tr>
                            <td  class='bg-light'>"."<img src='./assets/books/".$image_name."'class='round'>"."</td>
                            <td  class='bg-light'>". $item_nem. "</td>
                            <td class='bg-light'>". $price. "</td>
                            <td class='bg-light'><button class='btn btn-sm btn-outline-danger'>Remove</button></td>
                            <td class='bg-light'><button class='btn btn-sm btn-outline-danger'>Remove</button></td>
                        </tr>";
                    }
                    ?>
            </tbody>
           </table>
        </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4 w-100">
                    <h4 class="text-left">Subtotal:</h4>
                    <h5 class="text-right"><?php echo "₹".$total?></h5>
                    <form>
                        <button class="btn btn btn-warning btn-block">Proceed to Buy</button>
                    </form>
                </div>
            </div>
    </div>
  </div>
</body>


<?php
$id=$_GET['id'];
$query="SELECT * FROM product WHERE id='$id'";
$run=mysqli_query($c, $query);
$rsl=mysqli_fetch_assoc($run);
$product_name=$rsl['name'];
$image_name=$rsl['image_name'];
$price=$rsl['price'];
$qur="INSERT INTO cart (email, item_neme, price, image_name) VALUE ('$email', '$product_name', '$price', '$image_name')";
if($product_name)
{
  $add=mysqli_query($c, $qur);
  echo "<script>window.location.href='books.php' </script>";
}


?>
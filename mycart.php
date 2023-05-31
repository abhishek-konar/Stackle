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
            <h2>Shopping Cart</h2>
        </div>
        <div class="col-lg-9">
            <table class="table">
            <thead class="text-center">
                <tr>
                    <th scope="col"  class="bg-light">Serial Number</th>
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
                        $total=$total+$price;
                        echo 
                        "<tr>
                            <td  class='bg-light'>". $item_nem. "</td>
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
                    <h5 class="text-right"><?php echo $total?></h5>
                </div>
            </div>
    </div>
  </div>
</body>
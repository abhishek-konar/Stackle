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
                    <th scope="col"  class="bg-light">Total</th>
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
                        $qty=$row['qty'];
                        
                        echo 
                        "<tr>
                            <td  class='bg-light'>"."<img src='./assets/books/".$image_name."'class='round'>"."</td>
                            <td  class='bg-light'>". $item_nem. "</td>
                            <td class='bg-light'>". $price. "<input type='hidden' class='iprice' value='$price'></td>
                            <td class='bg-light'><input class='text-center w-50 iquantity' onchange='subTotal()' type='number' value='$qty' min='1' max='10'></td>
                            <td class='bg-light itotal'></td>
                            <td class='bg-light'><a href='manage_cart.php?token=$row[id]'><button class='btn btn-sm btn-outline-danger' >Remove</button></a></td>
                        </tr>";
                    }
                    ?>
            </tbody>
           </table>
        </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4 w-100">
                    <h4 class="text-left ">Subtotal:</h4>
                    <h5 class="text-right" id="gtotal"></h5>
                    <form>
                        <button class="btn btn btn-warning btn-block">Proceed to Buy</button>
                    </form>
                </div>
            </div>
    </div>
  </div>
</body>


<script>
// Function of Price calculation
var gt=0;
var iprice=document.getElementsByClassName('iprice');
var iquantity=document.getElementsByClassName('iquantity');
var itotal=document.getElementsByClassName('itotal');
var gtotal=document.getElementById('gtotal');
function subTotal()
{
    gt=0;
     for(i=0;i<iprice.length;i++)
    {
        itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
        gt=gt+(iprice[i].value)*(iquantity[i].value)
    }
        
        gtotal.innerText='₹'+ gt;
    }
    subTotal();
    
</script>
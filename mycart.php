<?php include ('./server.php'); 
include ('./connection.php');
error_reporting(0);
session_start();
$email=$_SESSION['em'];
$q="SELECT * FROM cart WHERE email='$email'";
$res=mysqli_query($connect, $q);
?>

<body>
  <div class="container p-4">
  <div class="card-header bg-light">
  <header class="text-left">DELEVERY ADDRESS</header>
</div>
    <div class="row">
        
    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12 pt-2">
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
                    
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $item_nem=$row['item_neme'];
                        $price=$row['price'];
                        $image_name=$row['image_name'];
                        $qty=$row['qty'];
                        echo 
                        "<tr>
                            <td  class='bg-light'>"."<img src='./assets/books/".$image_name."'class='round'>"."</td>
                            <td  class='bg-light item_nam'>". $item_nem. "</td>
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
        <?php  
        if($qty==0)
        {
            echo 
                "echo <script>window.location.href='empty_cart.php' </script>";
        }
        else
        {
            echo 
                "<div class='col-lg-3 my-2'>
                    <div class='border bg-light rounded p-4 w-100'>
                        <h4 class='text-left'>Subtotal:</h4>
                        <h5 class='text-right'id='gtotal'></h5>
                        <form method='post' action='' name='register'>
                            <input type='hidden' name='total' id='total'>
                            <td class='bg-light'><button class='btn btn btn-warning btn-block' name='register'>Proceed to Buy</button></td>
                        </form>
                    </div>
                </div>";
        }  
        ?>
      
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
        document.getElementById("total").value =gt;
    }
    subTotal();
    
</script>

<!--Function for Store data In Session-->
<?php 
if(isset ($_POST['register']))
{
    $total=$_POST['total'];
    session_start();
    $_SESSION['total']=$total;
    echo "<script>window.location.href='orderview.php' </script>";
    
}
?>
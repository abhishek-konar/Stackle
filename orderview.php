<?php 
error_reporting (0);
include ('./server.php');
include ('./connection.php');
session_start();
$total_price=$_SESSION['total'];
$email=$_SESSION['em'];
//Price Calculation
if($total_price>0)
{   $delivery_Charges="₹99";
    $deli_charges="99";
    $total_amount=$total_price+$deli_charges;
}
if($total_price>101)
{
    $delivery_Charges="₹89";
    $deli_charges="89";
    $total_amount=$total_price+$deli_charges;
}
if($total_price>300)
{
    $delivery_Charges="₹79";
    $deli_charges="79";
    $total_amount=$total_price+$deli_charges;
}
if($total_price>400)
{
    $delivery_Charges="₹69";
    $deli_charges="69";
    $total_amount=$total_price+$deli_charges;
}
if($total_price>500)
{
    $delivery_Charges="₹59";
    $deli_charges="59";
    $total_amount=$total_price+$deli_charges;
}
if($total_price>900)
{
    $delivery_Charges="Free";
    $deli_charges="0";
    $total_amount=$total_price+$deli_charges;
}
?>

<div class="container p-2">
    <div class="card-header bg-light">
        DELEVERY ADDRESS
    </div>
    <div class="row">
        <div class="col-sm-9 pt-2">
        <form method="post" action="" name="register">
            <?php
                    $q="SELECT * FROM address WHERE email='$email'";
                    $res=mysqli_query($connect, $q);
                    while($row=mysqli_fetch_assoc($res)){
                    $name=$row['name'];
                    $phone=$row['phone'];
                    $country=$row['country'];
                    $pin=$row['pin'];
                    $area=$row['area'];
                    $city=$row['city'];
                    $land=$row['land'];
                    $state=$row['state'];
                    $phone=$row['phone'];
                    $id=$row['id'];
                    $address=$name;
                    $address=$area. ','. $city. ',' .$state. ',' .$pin. ',Mobile Number: '. $phone. ',Landmark: '. $land ;
                    echo 
                    " 
                    <div class='card border rounded-0'>
                        <div class='card-body pt-1'>
                            <input type='radio' name='idd' value='$id'>
                            <label><h5 class='card-title'>".$name."</h5></label>
                            <p class='card-text'>". $address."</p>
                        </div>
                    </div>";
}
            ?>
        </div>
            <div class="col-sm-3 pt-2">
                <div class="card">
                    <div class="card-body">
                    <table class="table table-borderless">
                        <thead class="text-left">
                            <tr>
                                <th scope="col" class="bold"> Order Summary</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td class="text-left">Price:</td>
                                <td class="text-success"><?php echo '₹'. $total_price; ?></td>
                            </tr>
                            <tr>
                                <td class="text-left">Delivery Charges</td>
                                <td class="text-success"><?php echo $delivery_Charges;?></td>
                            </tr>
                            <tr>
                                <td class="text-left bold">Order Total:</td>
                                <td class="text-danger bold"><?php echo '₹'. $total_amount;?></td>
                            </tr>
                        </tbody>
                    </table>
                        <td class='bg-light'><button class='btn btn-warning btn-block' name="register">Place your order</button></td>
                    </form>
            </div>
            </div>
        </div>
    </div>
</div>

<?php




 if(isset ($_POST['register']))
 {
    $idd=$_POST['idd'];

    //Function for Collect of Data from Address
    $qr="SELECT * FROM address WHERE id='$idd'";
    $re=mysqli_query($connect, $qr);
    $ro=mysqli_fetch_assoc($re);
    $name=$ro['name'];
    $phone=$ro['phone'];
    $country=$ro['country'];
    $pin=$ro['pin'];
    $city=$ro['city'];
    $land=$ro['land'];
    $state=$ro['state'];
    $order_placed=date('d M Y');
        
    //Function for insert data into Order
    $image_name='khhkh';
    $deli_address=$name. ','. $city. ',' .$state. ',' .$pin. ','.  $phone. ','. $land ;
    $sql="INSERT INTO c_order (id, email, total_price, image_name, deli_address, order_placed) VALUE ('$idd', '$email', '$total_amount', '$image_name', '$deli_address', '$order_placed')";
    $r=mysqli_query($connect, $sql);
    if($r)
    {
    //Function for Delete from Cart
    $qr="DELETE FROM cart WHERE email='$email'";
    $r=mysqli_query($connect, $qr);
    echo "<script>window.location.href='yourorders.php' </script>";
    }
    
 }

?>

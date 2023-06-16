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

<div class="container p-4">
    <div class="card-header bg-light">
        Your Stackle Cart is empty.
    </div>
    <div class="row">
        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12 pt-2">
            <div class="card border rounded-0">
                <div class="card-body pt-1 text-center">
                    <img class='empty_cart' src='./assets/try.gif'/>
                    <a class='nav-link' href='dashboard.php' style="text-decoration: none; color: #565959;><p class="text-info">Pick up where you left off</p></a>
            </div>
        </div>
        </div>
            <div class="mb-4 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 pt-2">
                <div class="card">
                <div class="card-body">
                    <table class="table table-borderless">
                        <thead class="text-left">
                            <tr>
                                <th scope="col" class="bold"> Buy it again</th>
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
                </div>
            </div>
        </div>
    </div>
</div>

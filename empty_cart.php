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
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-2">
            <div class="card border rounded-0">
                <div class="card-body pt-1 text-center">
                    <img class='empty_cart' src='./assets/try.gif'/>
                    <a class='nav-link' href='dashboard.php' style="text-decoration: none; color: #565959;"><p class="text-info">Pick up where you left off</p></a>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>

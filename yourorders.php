<?php 
error_reporting (0);
include ('./server.php');
include ('./connection.php');
session_start();
$email=$_SESSION['em'];

?>

<div class="container p-2">
    <div class="card-header bg-light">
        Your Orders
    </div>
    <div class="row">
        <div class="col-sm-12 pt-2">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        
                        <th scope="col"  class="bg-light">TOTAL</th>
                        <th scope="col"  class="bg-light">ORDER PLACED</th>
                        <th scope="col"  class="bg-light"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                        $q="SELECT * FROM c_order WHERE email='$email'";
                        $res=mysqli_query($connect, $q);
                        while($row=mysqli_fetch_assoc($res)){
                        $total_price=$row['total_price'];
                        $deli_address=$row['deli_address'];
                        $date=date('d M Y');
                        echo 
                        "<tr>
                            <td  class='bg-light'>". '₹'. $total_price. "</td>
                            <td class='bg-light'>". $date. "</td>
                            <td class='bg-light'><button class='btn btn-sm  btn-warning btn-block' name='register'>Place your order</button></td>
                        </tr>";
                        }
                    ?>
        
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
    
    //Function for insert data into Order
    $image_name='khhkh';
    $deli_address=$name. ','. $city. ',' .$state. ',' .$pin. ','.  $phone. ','. $land ;
    $sql="INSERT INTO c_order (id, email, total_price, image_name, deli_address) VALUE ('$idd', '$email', '$total_amount', '$image_name', '$deli_address')";
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

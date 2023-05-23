<?php include ('./server.php'); ?>


<!--All address Details-->
<?php
error_reporting(0);
session_start();
$email=$_SESSION['em'];
$c=mysqli_connect('localhost', 'root', '', 'abhishek');
$q="SELECT * FROM address WHERE email='$email'";
$res=mysqli_query($c, $q);

while($row=mysqli_fetch_assoc($res)){
    $name=$row['name'];
    $phone=$row['phone'];
    $pin=$row['pin'];
    $area=$row['area'];
    $city=$row['city'];
    $land=$row['land'];
    $state=$row['state'];
    $phone=$row['phone'];

echo "<div class='wrapper'>
        <div class='cards_wrap'>".
            "<div class='card_item'>".
                "<div class='card_inner'>".
                    "<div class='medium'>" .$name. "</div>
                    <div class='film'>".$area. ", </div>
                    <div class='film'>".$city. ", ". $state. " " .$pin. "</div>
                    <div class='film'> Land mark: ".$land. "</div>
                    <div class='film'>Phone number: ". $phone. "</div>
                </div>
            </div>
        </div>
        
    </div>";



}
?>




<div class="wrapper">

	
<!--Tab 1-->
	<div class="cards_wrap">
		<div class="card_item">
			<div class="card_inner">
                <div class="medium"><?php echo $name; ?></div>
                <div class="film"><?php echo $area. ","; ?></div>
                <div class="film"><?php echo $city. ", ". $state. " " .$pin; ?></div>
				<div class="film"><?php echo "Phone number: ". $phone; ?></div>
                <div class="film"><?php echo "Land mark: ".$land; ?></div>
			</div>
		</div>

<!--Tab 2-->
		<div class="card_item">
			<a href="add_address.php" style="text-decoration: none;">
			<div class="card_inner">
				<img src="./assets/address.svg">
                <div class="medium">Add your Address</div>
                <div class="film">Add your Address </div>
			</div>
			</a>
		</div>

		
<!--Tab 3-->
		<div class="card_item">
			<div class="card_inner">
				<img  src="./assets/demo.svg">
                 <div class="medium">Contact</div>
                 <div class="film">Edit and Add yours Phone number </div>
			</div>
		</div>
		
<!--Tab 3-->
		<div class="card_item">
			<div class="card_inner">
				<img src="./assets/contact_us.svg">
                 <div class="medium">Contact Us</div>
                 <div class="film">Edit, Add and Delete your Address</div>
			</div>
		</div>
	</div>
</div> 

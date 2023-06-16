<?php include ('./server.php'); 
include ('./connection.php')?>


<div class="pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="section-head col-sm-12">
          <h4><span>Your Addresses </h4>
        </div>

		<!--Add New Addres-->
        <div class="col-lg-4 col-sm-6">
		    <a href="add_address.php" style="text-decoration: none;">
          <div class="item">
          <img src="./assets/add_plus.png" class="round" alt="img">
            <h6>Add Address</h6>
          </div>
		    </a>
        </div>

	
<!--All address Details-->
<?php
        error_reporting(0);
        session_start();
        $email=$_SESSION['em'];
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
        echo 
        "<div class='col-lg-4 col-sm-6'>".
          "<div class='item'>".
            "<h6>". $name. "</h6>".
            "<p>".$area. ", </p>".
            "<p>".$city. ", ". $state. " " .$pin."</p>".
            "<p> Landmar: ".$land."</p>".
            "<p>".$country."</p>".
            "<p> Phone Number: ".$phone."</p>".
            "<a id='ya-myab-address-edit-btn-0 'class='a-link-normal edit-link' href='update.php?id=$row[id]'>Edit</a>
            &nbsp; | &nbsp;".
            "<a id='ya-myab-address-edit-btn-0 'class='a-link-normal edit-link' href='delete.php?id=$row[id]'> Remove</a>
            &nbsp; | &nbsp;
            <a id='ya-myab-address-edit-btn-0 'class='a-link-normal edit-link' href='#'>Set as Defult</a>
          </div>
        </div>";       
}
?>
      </div>
    </div>
</div>






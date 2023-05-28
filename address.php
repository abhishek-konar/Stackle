<?php include ('./server.php'); ?>


<div class="pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="section-head col-sm-12">
          <h4><span>Your Addresses </h4>
        </div>

		<!--Add New Addres-->
        <div class="col-lg-4 col-sm-6">
		    <a href="add_address.php" style="text-decoration: none;">
          <div class="item"> <span class="icon feature_box_col_one"></span></i></span>
            <h6>Add Address</h6>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
          </div>
		    </a>
        </div>

		
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
        echo 
        "<div class='col-lg-4 col-sm-6'>".
          "<div class='item'>". "<span class='icon feature_box_col_one'></span></i></span>".
            "<h6>". $name. "</h6>".
            "<p'>".$area. ", </p>".
            "<p>".$city. ", ". $state. " " .$pin."</p>".
            "<p> Landmar: ".$land."</p>".
            "<p>".$phone."</p>".
          "</div>
        </div>";       
}
?>
      </div>
    </div>
</div>






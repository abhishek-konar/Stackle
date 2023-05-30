<?php include ('./server.php');
error_reporting(0);
$email=$_SESSION['em'];
$id=$_GET['id'];
$c=mysqli_connect('localhost', 'root', '', 'abhishek');
$q="SELECT * FROM address WHERE id='$id'";
$r=mysqli_query($c, $q);
$row=mysqli_fetch_assoc($r);
$name=$row['name'];
$phone=$row['phone'];
$pin=$row['pin'];
$area=$row['area'];
$city=$row['city'];
$land=$row['land'];
$state=$row['state'];
$phone=$row['phone'];
?>

<!--Update Address Form-->
<form  name="insert" method="post" action="" onsubmit="return myfunction()" >    
    <div class="box">
          <p class="large">Update yours address</p>
          <input class="textbox"  type="text" id="name" name="name" value="<?php echo $name ?>" placeholder="Full name (First and Last name)" maxlength="50">
          <input class="textbox" type="text" id="mobilenumbe" name="phone" value="<?php echo $phone ?>" placeholder="Mobile number" maxlength="10">
          <input class="textbox"  type="pin" id="pin" name="pin" value="<?php echo $pin ?>" placeholder="Pin" maxlength="9">
          <input class="textbox"  type="text" id="area" name="area" value="<?php echo $area ?>" placeholder="Area, Street, Sector, Village">
          <input class="textbox"  type="text" id="city" name="city" value="<?php echo $city ?>" placeholder="Town/City" maxlength="40">
          <input class="textbox"  type="text" name="land" value="<?php echo $land ?>" placeholder="Landmark (E.g. near Stackle House)" maxlength="50">
            <div class="state">
                <select id="state" name="state"  Class="select">
                    <option value="">Select Yours State Name</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="West Bengal">West Bengal</option>
                </select>
        </div>
        <input class="textbox"  type="text" id="Country" name="Country" placeholder="Country/Region">
        <p style="color:red" id="myalert"></p>
        <input type="submit" value="Edit address" class="submit" name="insert">
    </div>
  </form>
  


<!--Update Address-->
<?php 

    if (isset ($_POST['insert'])){
      $con=mysqli_connect('localhost', 'root', '', 'abhishek');
    }

    if($con){
        $name= $_POST['name'];
        $phone=$_POST['phone'];
        $pin=$_POST['pin'];
        $area=$_POST['area'];
        $land=$_POST['land'];
        $state=$_POST['state'];
        $city=$_POST['city'];
        $Country=$_POST['Country'];
        $sql="UPDATE address SET email='$email, Country='$Country', name='$name', phone='$phone', pin='$pin', area='$area', land='$land', city='$city', state='$state' WHERE id='$id'";
        $run=mysqli_query($con, $sql);
        echo "<script>window.location.href='address.php' </script>";
    }
    
  ?>

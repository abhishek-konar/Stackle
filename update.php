<?php include ('./server.php');
$id=$_GET['id'];
$c=mysqli_connect('localhost', 'root', '', 'abhishek');
$q="SELECT * FROM address WHERE id='$id'";
$r=mysqli_query($c, $q);
$row=mysqli_fetch_assoc($r);
$name=$row['name'];
$phone=$row['phone'];
$country=$row['country'];
$pin=$row['pin'];
$area=$row['area'];
$city=$row['city'];
$land=$row['land'];
$state=$row['state'];
?>


<section class="box forms">
            <div class="form login">
                <div class="form-content">
                    <header>Edit your address</header>
                    <form name="update" method="post" action="" > 
                        <div class="field input-field">
                        <input class="input" type="text" name="name" value="<?php echo $name ?>"  placeholder="Full name (First and Last name)" maxlength="50">
                        </div>
                        <div class="field input-field">
                        <input  class="input" type="text"  name="phone" value="<?php echo $phone ?>" placeholder="Mobile number" maxlength="10">
                        </div>

                        <div class="field input-field">
                        <input  class="input" type="pin"  name="pin" value="<?php echo $pin ?>" placeholder="Pin" maxlength="9">
                        </div>

                        <div class="field input-field">
                        <input  class="input" type="text"  name="area" value="<?php echo $area ?>" placeholder="Area, Street, Sector, Village">
                        </div>
                        
                        <div class="field input-field">
                        <input  class="input" type="text"  name="city" value="<?php echo $city ?>" placeholder="Town/City" maxlength="40">
                        </div>
                        <div class="field input-field">
                        <input  class="input" type="text"   value="<?php echo $country ?>" placeholder="Landmark (E.g. near Stackle House)" maxlength="50">
                        </div>
                        <div class="field input-field">
                        <input  class="input" type="text"   value="<?php echo $land ?>" placeholder="Landmark (E.g. near Stackle House)" maxlength="50">
                        </div>
                        <div class="field button-field">
                        <select class="selectpicker" name="state"  Class="select">
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
                          
                        <div class="field button-field">
                            <button name="update">Save changes</button>
                        </div>
                    </form>
        
                    <p style="color:red" id="myalert"></p>
                </div>
            </div>
        </section>


<?php 

    if (isset($_POST['update'])){
        $name= $_POST['name'];
        $phone=$_POST['phone'];
        $pin=$_POST['pin'];
        $area=$_POST['area'];
        $land=$_POST['land'];
        $state=$_POST['state'];
        $city=$_POST['city'];
        $country=$_POST['Country'];
        $sql= "UPDATE `address` SET `country`='$country',`name`='$name',`phone`='$phone',`pin`='$pin',`area`='$area',`land`='$land',`city`='$city',`state`='$state' WHERE id=$id";
        $run=mysqli_query($c, $sql);
        if($run){
          echo "<script>window.location.href='address.php' </script>";
        }
        
    }
    
  ?>

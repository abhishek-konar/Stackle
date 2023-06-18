<?php include ('./server.php'); ?>

<!--Address Form-->
<section class="box forms">
            <div class="form login">
                <div class="form-content">
                    <header>Edit your address</header>
                    <form name="insert" method="post" action="" onsubmit="return myfunction()"> 
                        <div class="field input-field">
                        <input class="form-control" type="text" id="name" name="name"  placeholder="Full name (First and Last name)" maxlength="50">
                        </div>
                        
                        <div class="field input-field">
                        <input  class="form-control" type="text" id="area" name="area"  placeholder="Area, Street, Sector, Village">
                        </div>

                        <div class="input-group mb-3 field input-field">
                          <input  class="form-control mr-1" type="text" id="mobilenumbe" name="phone" placeholder="Mobile number" maxlength="10">
                          <input  class="form-control" type="pin" id="pin"  name="pin"  placeholder="Pin" maxlength="9">
                        </div>


                        <div class="field input-field">
                          <input  class="form-control"  type="text" id="city"   name="city"  placeholder="Town/City" maxlength="40">
                        </div>

                        <div class="field input-field">
                        <input  class="form-control" type="text" id="landmark" name="landmark" placeholder="Landmark (E.g. near Stackle House)" maxlength="50">
                        </div>


                        <div class="field button-field">
                        <select class="selectpicker" id="state" name="state"  Class="select form-control">
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
                            <button name="insert">Save changes</button>
                        </div>
                    </form>
        
                    <p style="color:red" id="myalert"></p>
                </div>
            </div>
        </section>


<!--Insert Address-->
<?php 

    error_reporting(0);
    session_start();
    $email=$_SESSION['em'];

    if(isset ($_POST['insert'])){
        $name= $_POST['name'];
        $phone=$_POST['phone'];
        $pin=$_POST['pin'];
        $area=$_POST['area'];
        $land=$_POST['landmark'];
        $state=$_POST['state'];
        $city=$_POST['city'];
        $Country="India";
        $con=mysqli_connect('localhost', 'root', '', 'abhishek');
        $check=mysqli_num_rows(mysqli_query($con, "SELECT * FROM address WHERE email='$email'"));
      if($check=="0")
      {
        $address_type="Defult";
        $sql="INSERT INTO address (email, Country, name, phone, pin, area, land, city, state, address_type) VALUE ('$email', '$Country', '$name', '$phone', '$pin', '$area', '$land', '$city', '$state', '$address_type')";
        $run=mysqli_query($con, $sql);
        echo "<script>window.location.href='address.php' </script>";
      }
      else
      {
        $address_type="No";
        $sql="INSERT INTO address (email, Country, name, phone, pin, area, land, city, state, address_type) VALUE ('$email', '$Country', '$name', '$phone', '$pin', '$area', '$land', '$city', '$state', '$address_type')";
        $run=mysqli_query($con, $sql);
        echo "<script>window.location.href='address.php' </script>";
      }

    }

  
  ?>

<?php include ('./server.php'); ?>

<!--Address Form-->
<form  name="register" method="post" action="" >    
    <div class="wrap">
          <p class="p1">Add a new address</p>
          <input class="textbox"  type="text" name="name" placeholder="Full name (First and Last name)">
          <input class="textbox" type="text" name="phone" placeholder="Mobile number">
          <input class="textbox"  type="pin" name="pin" placeholder="Pin" maxlength="9">
          <input class="textbox"  type="text" name="area" placeholder="Area, Street, Sector, Village">
          <input class="textbox"  type="text" name="land" placeholder="Landmark (E.g. near Stackle House)">
            <div class="t">
                <select name="state" Class="s">
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
        <p style="color:red" id="myalert"></p>
        <input type="submit" value="Add address" class="submit" name="insert">

    </div>
  </form>
  


<!--Insert Address-->
<?php 

    error_reporting(0);
    session_start();
    $email=$_SESSION['em'];

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
        if($state==""){
            echo '<script>document.getElementById("myalert").innerHTML= "Please Select State" </script>';
            mysqli_close($con);
          }

        else{
            $sql="INSERT INTO address (email, name, phone, pin, area, land, state) VALUE ('$email', '$name', '$phone', '$pin', '$area', '$land', '$state')";
            $run=mysqli_query($con, $sql);
        }

      
    }
    
  ?>

<?php include ("./admin.php");?>
<section class="box forms" >
            <div class="form login">
                <div class="form-content">
                    <header>Add Your Product</header>
                    <form method="post" name="insert" enctype="multipart/form-data"> 
                        <div class="field input-field">
                          <input class="input" type="text" name="name" placeholder="Product Name" maxlength="50">
                        </div>
                        <div class="field input-field">
                          <input  class="password" type="number" name="quentity" placeholder="Add Quentity" maxlength="100">
                        </div>
                        <div class="field input-field">
                          <input  class="password" type="number" name="price" placeholder="Price" maxlength="9">
                        </div>
                        <div class="field input-field">
                          <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="description"></textarea>
                            <label for="floatingTextarea">Comments</label>
                          </div>
                        </div>
                          <div class="pt">
                            <input class="form-control" type="file" id="formFile" name="file">
                          </div>
                          <div class="field button-field">
                        <select class="selectpicker" name="product_type"  Class="select">
                            <option value="">Select Yours Product Type</option>
                            <option value="Book">Book</option>
                            <option value="Mobile">Mobile & Accessory</option>
                      </select>
                        </div>
                       
                        <div class="field button-field">
                            <button name="insert">Add Product</button>
                        </div>
                    </form>
                    <p style="color:red" id="myalert"></p>
                </div>
            </div>
        </section>


  <?php 
  //Function of Add Product
 error_reporting (0);
 if (isset ($_POST['insert'])){
  $con=mysqli_connect('localhost', 'root', '', 'abhishek');
  if($con){
    //Function to get All data from Input
    $name= $_POST['name'];
    $quentity= $_POST['quentity'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    $product_type=$_POST['product_type'];
    $file_name=$_FILES['file']['name'];
    $fileExtension=substr(strrchr($file_name, '.'),1);
    //File Type Test
    
    if($name=="" || $price=="" || $quentity=="" || $file_name=="")
    {
      echo '<script>document.getElementById("myalert").innerHTML= "Fill proper data" </script>';
        mysqli_close($con);
    }
    
    else{
    //Function to get Randaom Numbe
      $tmp_name=$_FILES['file']['tmp_name'];
      $random_number = rand(1000, 9999);
      $re_name=$random_number.'.jpg';
    //Function of File move in a Folder
      move_uploaded_file($tmp_name,"./assets/books/". $re_name);

    //Create Connection and Store Data in the Database
      $sql="INSERT INTO product (categories_id, name, price, qty, image_name, description, product_type) VALUE ('$random_number', '$name', '$price', '$quentity', '$re_name', '$description', '$product_type')";
      $run=mysqli_query($con, $sql);
      echo "<script>window.location.href='admin.php' </script>";
    }
    
}

 }
  ?>







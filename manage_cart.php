<?php 
session_start();
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {   $myitems=array_column($_SESSION['cart'], 'Item_Name');
            if(in_array($_POST['Item_Name'], $myitems))
            {
                echo "<script>alert('Item Alredy Added');
                            window.location.href='books.php';
                </script>";
            }
            else
            { 
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('Item_name'=>$_POST['Item_name'],'Price'=>$_POST['Price'],'Quantity'=>1);
                echo "<script>alert('Item Added');
                    window.location.href='books.php';
                </script>";
            }
        }
        else
        {
            $_SESSION['cart'][0]=array('Item_name'=>$_POST['Item_name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            print_r($_SESSION['cart']);
            echo "<script>alert('Item Added');
                            window.location.href='books.php';
                </script>";
        }
    }
}
?>
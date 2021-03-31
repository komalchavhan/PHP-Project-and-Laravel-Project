<?php 

    $con=mysqli_connect('localhost','root','','php');
error_reporting(0);
 
    if(isset($_POST['update']))
    { 	$Id = $_GET['ID'];
        $product_name = $_POST['product_name'];
		$product_price = $_POST['product_price'];
        $product_image= $_POST['product_image'];
        $product_caterogy= $_POST['product_caterogy'];
        
        $query = " update product set product_name = '".$product_name."',product_price='".$product_price."'
        ,product_image='".$product_image."',product_caterogy='".$product_caterogy."' where Id='".$Id."'";
        $rs = mysqli_query($con,$query);

        if($rs)
          {
          echo "<script>alert('Record Updated Successfully')</script>";
          ?> 
         <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/komal_training/assignment_4/viewp.php">
         <?php
         }

        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:viewp.php");
    }


?>
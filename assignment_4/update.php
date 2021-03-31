<?php 

    $con=mysqli_connect('localhost','root','','php');
error_reporting(0);
 
    if(isset($_POST['update']))
    { 	$Id = $_GET['ID'];
        $cname = $_POST['cname'];
        $query = " update category set cname = '".$cname."' where Id='".$Id."'";
        $rs = mysqli_query($con,$query);

        if($rs)
					{
					echo "<script>alert('Record updated Successfully')</script>";
				?> 
 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/komal_training/assignment_4/viewc.php">
  <?php
}

        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:viewc.php");
    }


?>
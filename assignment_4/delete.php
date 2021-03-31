
<?php 
$con=mysqli_connect('localhost','root','','php');
error_reporting(0);
 

if(isset($_GET['Del']))
         {
             $Id = $_GET['Del'];
             $query = " delete from category where Id = '".$Id."'";
             $rs = mysqli_query($con,$query);
               if($rs)
					{
					echo "<script>alert('Record deleted Successfully')</script>";
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
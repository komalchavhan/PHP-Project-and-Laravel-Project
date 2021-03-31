<html>
<head>
<body>
<body align="centre">
<?php 
$con =mysqli_connect("localhost","root","","php");

$cname = $_GET['cname'];
$sql ="insert into category(cname)values('$cname')";
$rs=mysqli_query($con , $sql);
if($rs)
{
 echo "<script>alert('Record inserted Successfully')</script>";
 ?> 
 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/komal_training/assignment_4/viewc.php">
  <?php
}
?>
</body>
</html>
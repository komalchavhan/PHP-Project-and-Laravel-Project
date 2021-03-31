<html>
<head>
<body>
<body align="centre">
<?php 
$con =mysqli_connect("localhost","root","","php");
$product_name = $_GET['product_name'];
$product_price = $_GET['product_price'];
$product_image = $_GET['product_image'];
$product_caterogy = $_GET['product_caterogy'];

$sql ="insert into product(product_name,product_price,product_image,product_caterogy) values 
('$product_name','$product_price','$product_image','$product_caterogy')";
$rs=mysqli_query($con , $sql);
if($rs)
{
 echo "<script>alert('Record inserted Successfully')</script>";
 ?> 
 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/komal_training/assignment_4/viewp.php">
  <?php
}
?>
</body>
</html>
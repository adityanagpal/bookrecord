<?php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
	$index="b".$j;
	if(isset($_POST[$index]))
		$b_id[$i]=$_POST[$index];
	else
		$i--;
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
$sum=0.00;
for($k=1;$k<=$size;$k++)
{
$q="select sum(price) from book where bookid=".$b_id[$k];
$s=mysqli_query($con,$q);
$a[$k]=mysqli_fetch_array($s);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Deletion</title>
</head>
<body>
<h1>Sum of price of selected Books</h1>
<p><?php 
for($k=1;$k<=$size;$k++)
	$sum=$sum+$a[$k][0];
echo $sum;
     ?>
 </p>
 Go back to home page  <a href="home.php">Click Here</a>
 </body>
 </html>
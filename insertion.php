<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');

$q="INSERT INTO book (title,price,author) values('$title',$price,'$author')";
$status=mysqli_query($con,$q);
mysqli_close($con);

?>
<!DOCTYPE html>
<html>
<head>
<title>Insertion</title>
</head>
<body>
<h1>Book Record Management</h1>
<p><?php if($status==1) 
	echo "Record inserted";
     else
	echo "Insertion Failed";
     ?>
 </p>
 Do you want to insert more record?   <a href="insertionform.php">Click Here</a></br>
 Go back to home page  <a href="home.php">Click Here</a>
 </body>
 </html>
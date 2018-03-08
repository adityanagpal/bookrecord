<?php
$min=$_POST['min'];
$max=$_POST['max'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');

$q="select * from book where price>$min and price<$max";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
if($num==0)
	echo "No match Found";
else
{

?>
<!DOCTYPE html>
<html>
<head>
<style>
body
{
	background-color : chocolate;
}
</style>
<title>View search results</title>
<link rel="stylesheet" href="./css/viewstyle.css" />
</head>
<body>
<h1>Book Record Management</h1>
<table id="view_table">
 <tr>
  <th>Book ID</th>
  <th>Title</th>
  <th>Price</th>
  <th>Author</th>
  </tr>
  <?php
  
  for($i=1;$i<=$num;$i++)
  {
	 $row=mysqli_fetch_array($result);
  ?>
  <tr>
  <td><?php echo $row[0]; ?></td>
  <td><?php echo $row[1]; ?></td>
  <td><?php echo $row[2]; ?></td>
  <td><?php echo $row[3]; ?></td>
  </tr>
  <?php
}}
  ?>
  </table>
 </br> Go back to home page  <a href="home.php">Click Here</a>
  </body>
  </html>
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
$q="Select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Sum price of Books</title>
<link rel="stylesheet" href="./css/viewstyle.css" />
</head>
<style>
body
{
	background-color : chocolate;
}
</style>
<body>
<h1>Book Record Management</h1>
<form action="sumprice.php" method="post">
<table id="view_table">
 <tr>
  <th>Book ID</th>
  <th>Title</th>
  <th>Price</th>
  <th>Author</th>
  <th>Select in caluculation</th>
  </tr>
  <?php
  for($i=1;$i<=$num;$i++)
  {
	 $row=mysqli_fetch_array($result);
  ?>
  <tr>
  <td><?php echo $row[0]; ?></td>
  <td><?php echo $row[1]; ?></</td>
  <td><?php echo $row[2]; ?></</td>
  <td><?php echo $row[3]; ?></</td>
  <td><input type="checkbox" value="<?php echo $row[0]; ?>" name="b<?php echo $i; ?>" /></td>
  </tr>
  <?php
  }
  ?>
  <tr>
  <td colspan="5"><input type="submit" value="Sum"/></td>
  </tr>
  </table>
  </form>
  </body>
  </html>
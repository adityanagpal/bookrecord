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
<style>
body
{
	background-color : chocolate;
}
</style>
<title>View Book Records</title>
<link rel="stylesheet" href="./css/viewstyle.css" />
</head>
<body>
<h1>Book Record Management</h1>
<form action="updation.php" method="post">
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
  <td><?php echo $row[0];?> <input type="hidden" name="bookid<?php echo $i?>" value= "<?php echo $row[0];?>" /> </td>
  <td><input type="text"  value="<?php echo $row[1];?>" name="title<?php echo $i;?>"  /></td>
  <td><input type="text"  value="<?php echo $row[2];?>" name="price<?php echo $i;?>" /></td>
  <td><input type="text" value="<?php echo $row[3];?>" name="author<?php echo $i;?>"/></td>
  </tr>
  <?php
  }
  ?>
  </table>
  <input type="submit" value="Update" />
  </form>
  </body>
  </html>
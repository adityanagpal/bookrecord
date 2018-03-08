<!DOCTYPE html>
<html>
<head>
<style>
body
{
	background-color : chocolate;
}
</style>
<title>Search by price range</title>
</head>
<body>
<h3>enter the max and min price here</h3>
<form action="Resultprice.php" method="post">
<table>
<tr>
<th>Minimum price</th>
<td><input type="text" name="min"  required /></td>
</tr>
<tr>
<tr>
<th>Maximum price</th>
<td><input type="text" name="max"  required /></td>
</tr>
<tr>
<th></th>
<td><input type="submit" value="Search" /></td>
</tr>
</table>
</form>
</body>
</html>
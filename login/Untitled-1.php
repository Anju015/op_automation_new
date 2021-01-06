<?php
session_start();
//$UserName = $_SESSION['UserName'];
//require("checkLoginSession.php");
$adminid = $_GET['id'];

//CONNECTION CODE WAS HERE

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


echo("Logged In As: $UserName");
echo "<br />";
echo("We are editing Data for ID: $adminid");
echo "<br />";
echo "<a href=test.php>Go back to panel</a>";

$id=$_GET['id'];
// Retrieve data from database 
$sql="SELECT * FROM admin WHERE id='$id'";
$result=mysql_query($sql) or die(mysql_error());

$rows=mysql_fetch_array($result);
?>
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<form name="form1" method="post" action="update_ac.php">
<td>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>&nbsp;</td>
<td colspan="3"><strong>Update data in mysql</strong> </td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>Main Content</strong></td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center"><input name="name" type="text" id="name" value="<? echo $rows['name']; ?>"></td>
<td align="center"><input name="mainContent" type="text" id="mainContent" value="<? echo $rows['mainContent']; ?>" size="15"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" id="id" value="<? echo $rows['id']; ?>"></td>
<td align="center"><input type="submit" name="Submit" value="Submit"></td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
</table>

<?
mysql_close();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Page</title>
</head>

<body>
<h2>Edit Page (<?php echo ("$adminid"); ?>)</h2>
</body>
</html>
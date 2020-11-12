<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<link rel="stylesheet" type="text/css" href="home.css">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body bgcolor="mediumaquamarine">




<center>
            <h4>STAFF DETAILS</h4>
          
         <div class="modal-body">
 <table>
<form action="add_staff2.php" method="post" name="f1" enctype="multipart/form-data" class="form-donation">
<div class="row"><tr>

                            <div class="form-group col-md-12 ">
<td>Staff ID</td>
<td><input type="text" name="txtid"></td>
</tr></div></div>
<tr><div class="row">

                            <div class="form-group col-md-12 ">
<td>Name</td>
<td><input type="text" name="txtname" class="form-control"/></td>
</tr></div></div>

<tr>
<td>Designation</td>
<td><input type="text" name="post" class="form-control" /></td>
</tr></div></div>
<div class="row">
<div class="form-group col-md-12 ">
<tr>
<td>Address</td>
<td><textarea name="txtadd" class="form-control"></textarea></td>
</tr></div><div>
<div class="row">

                            <div class="form-group col-md-12 ">
<tr >
<td>Sex</td>
<td><select name="sex"  class="form-control">
<option value='select'>select sex</option>
<option value='m'>male</option>
<option value='f'>female</option></select>
</td>
</tr></div></div>
<div class="row">

    <div class="form-group col-md-12 ">
<tr>
<td>Email</td>
<td><input type="text" name="txtemail" class="form-control"/></td>
</tr></div></div><div class="row">

                            <div class="form-group col-md-12 ">
<tr>
<td>Phone number</td>
<td><input type="text" name="txtphone" class="form-control"/></td>
</tr></div></div><div class="row">

                            <div class="form-group col-md-12 ">
 <tr>
    <td>Upload Image</td>
    <td><input type="file" name="image" class="form-control" ></td>
  </tr></div></div><div class="row">

                            <div class="form-group col-md-12 ">
<tr>
<td>User Name</td>
<td><input type="text" name="txtname2" /></td
></tr></div></div><div class="row">

                            <div class="form-group col-md-12 ">
<tr>
<td>Password</td>
<td><input type="password" name="txtpass" class="form-control"/></td>
</tr></div></div><div class="row">

                            <div class="form-group col-md-12 ">
<tr>
<td><center><input type="submit"  value="SAVE" onClick="return cc()"/></center></td>
</tr>
</form>
</table>
</center>
</body>
</html>
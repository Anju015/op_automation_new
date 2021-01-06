<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

 include 'Dbconnection.php';
               
        $m1 =$_POST['medicine1'];
		$m2 =$_POST['medicine2'];
		$m3 =$_POST['medicine3'];
		$m4 =$_POST['medicine4'];
		$m5 =$_POST['medicine5'];
        $q1 = $_POST['qty1'];
		$q2 = $_POST['qty2'];
		$q3 = $_POST['qty3'];
		$q4 = $_POST['qty4'];
		$q5 = $_POST['qty5'];

		$sql1="UPDATE stock_tbl SET qty=qty-$q1  WHERE med_name='$m1' ";
		$sql2="UPDATE stock_tbl SET qty=qty-$q2  WHERE med_name='$m2'  ";
		$sql3="UPDATE stock_tbl SET qty=qty-$q3  WHERE med_name='$m3' ";
		$sql4="UPDATE stock_tbl SET qty=qty-$q4  WHERE med_name='$m4'  ";
		$sql5="UPDATE stock_tbl SET qty=qty-$q5  WHERE med_name='$m5'  ";
		$query1=mysqli_query($con,$sql1);
		$query2=mysqli_query($con,$sql2);
		$query3=mysqli_query($con,$sql3);
		$query4=mysqli_query($con,$sql4);
		$query5=mysqli_query($con,$sql5);



?>
<p>medicine despensed</p>
<a href="disp.php"  class="btn btn-primary" style="color:aliceblue;"><input type="button" value="BACK" /></a>
</body>
</html>
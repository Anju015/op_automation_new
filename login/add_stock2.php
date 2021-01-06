<?php

include("Dbconnection.php");
if(isset($_POST['save']))
{
	
	
/*$id=$_POST['txtid'];*/
	$sid=$_POST['s1'];
	$med_name=$_POST['s2'];
	$mf=$_POST['s3'];
	$qty=$_POST['s4'];
	$ex_date=$_POST['s5'];
	$pr=$_POST['s6'];
	$date=$_POST['s7'];
	
	$sql="INSERT INTO stock_tbl values('$sid','$med_name','$mf','$qty','$ex_date','$date','$pr')";
/*	move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/". $_FILES["image"]["name"]);*/
/*$ins2=mysqli_query("insert into login_tb1(username,password)values('$username','$password')");*/
/*$upd=mysql_query("update param set p_id='$id'");*/

	if (mysqli_query($con, $sql)) {
      echo "New record created successfully";
	  
	} 
	else 
	{
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
}

?>
<script>
//alert("Successfully saved");
window.location="add_stock2.php";
</script>
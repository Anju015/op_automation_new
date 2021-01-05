<?php

include("../login/Dbconnection.php");
?>
<?php
if(isset($_POST['save']))
{
  $opid=$_POST['S2'];
	$opno=$_POST['S1'];
	$pid=$_POST['S3'];
	$room=$_POST['S4'];
	$date=$_POST['S5'];
	
	$sql="INSERT INTO daily_op values('$opid','$opno','$pid','$room','$date')";
//  $sql1="INSERT INTO login_tb(post,username,password) SELECT post,username,password FROM staff_details";
//&& mysqli_query($con,$sql1)

	//move_uploaded_file($tempname, $folder);

	if (mysqli_query($con,$sql) )
  {
?>
	<script>
		alert("Successfully saved");
		window.location="opreg.php";
	</script>
<?php 	}
	else
	{
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

}
?>

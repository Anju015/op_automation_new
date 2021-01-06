<?php

include("../login/Dbconnection.php");
?>
<?php
if(isset($_POST['save']))
{
  $sid=$_POST['txtid'];
	
	$sql="DELETE FROM staff_reg WHERE sid='$sid'";
//  $sql1="INSERT INTO login_tb(post,username,password) SELECT post,username,password FROM staff_details";
//&& mysqli_query($con,$sql1)

	//move_uploaded_file($tempname, $folder);

	if (mysqli_query($con,$sql) )
  {
?>
	<script>
		alert("Successfully removed");
		window.location="remove_staff2.php";
	</script>
<?php 	}
	else
	{
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

}
?>

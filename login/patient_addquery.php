<?php

include("../login/Dbconnection.php");
?>
<?php
if(isset($_POST['save']))
{
  $pid=$_POST['txtid'];
	$name=$_POST['txtname'];
	$age=$_POST['txtage'];
	$address=$_POST['txtadd'];
	$gender=$_POST['sex'];
	$place=$_POST['txtplace'];
	$phone=$_POST['txtphone'];
	$date=$_POST['txtdate'];
	$sql="INSERT INTO patient_reg values('$pid','$name','$age','$address','$gender','$place','$phone','$date')";
//  $sql1="INSERT INTO login_tb(post,username,password) SELECT post,username,password FROM staff_details";
//&& mysqli_query($con,$sql1)

	//move_uploaded_file($tempname, $folder);

	if (mysqli_query($con,$sql) )
  {
?>
	<script>
		alert("Successfully saved");
		window.location="patient_admission.php";
	</script>
<?php 	}
	else
	{
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

}
?>

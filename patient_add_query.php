<?php

include("Dbconnection.php");
?>
<?php
if(isset($_POST['save']))
{
  $pid=$_POST['txtid'];
	$name=$_POST['txtname'];
	$age=$_POST['txtage'];
  $gender=$_POST['sex'];
	$address=$_POST['txtadd'];
	$phone=$_POST['txtphone'];
	$place=$_POST['txtplace'];
	$date=$_POST['txtdate'];
	$sql="INSERT INTO patient_reg values('$pid','$name','$age','$gender','$address','$place','$phone','$date')";
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

<?php

include("Dbconnection.php");
?>
<?php
if(isset($_POST['save']))
{
  $sid=$_POST['txtid'];
	$name=$_POST['txtname'];
	$post=$_POST['post'];
	$address=$_POST['txtadd'];
	$gender=$_POST['sex'];
	$email=$_POST['txtemail'];
	$phone=$_POST['txtphone'];
	$filename = $_FILES["images"]["name"];
  $tempname = $_FILES["images"]["tmp_name"];
  $folder = "uploads/".$filename;
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="INSERT INTO staff_reg values('$sid','$name','$post','$address','$gender','$email','$phone','$filename','$username','$password')";
//  $sql1="INSERT INTO login_tb(post,username,password) SELECT post,username,password FROM staff_details";
//&& mysqli_query($con,$sql1)

	//move_uploaded_file($tempname, $folder);

	if (mysqli_query($con,$sql) )
  {
?>
	<script>
		alert("Successfully saved");
		window.location="add_staff.php";
	</script>
<?php 	}
	else
	{
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

}
?>

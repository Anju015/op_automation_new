<?php

include("../login/Dbconnection.php");
?>
<?php
if(isset($_POST['save1']))
{
  $address=$_POST['txtadd'];
    $sid =$_POST['txtname'];
	
	$sql="UPDATE staff_reg SET address = '$address' WHERE staff_reg.sid = '$sid'";
    //$query=mysqli_query($con,$sql);
	//move_uploaded_file($tempname, $folder);
if (mysqli_query($con,$sql) )
  {
?>
	<script>
		alert("Successfully updated");
		window.location="edit2.php";
	</script>
<?php 	}
	else
	{
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

}
elseif(isset($_POST['save2']))
{
  $mail=$_POST['txtemail'];
    $sid =$_POST['txtname'];
	
	$sql="UPDATE staff_reg SET email = '$mail' WHERE staff_reg.sid = '$sid'";
    //$query=mysqli_query($con,$sql);
	//move_uploaded_file($tempname, $folder);
if (mysqli_query($con,$sql) )
  {
?>
	<script>
		alert("Successfully updated");
		window.location="edit2.php";
	</script>
<?php 	}
	else
	{
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

}
elseif(isset($_POST['save3']))
{
  $phone=$_POST['txtphone'];
    $sid =$_POST['txtname'];
	
	$sql="UPDATE staff_reg SET phone = '$phone' WHERE staff_reg.sid = '$sid'";
    //$query=mysqli_query($con,$sql);
	//move_uploaded_file($tempname, $folder);
if (mysqli_query($con,$sql) )
  {
?>
	<script>
		alert("Successfully updated");
		window.location="edit2.php";
	</script>
<?php 	}
	else
	{
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

}
elseif(isset($_POST['save4']))
{
  $filename = $_FILES["images"]["name"];
    $sid =$_POST['txtname'];
	
	$sql="UPDATE staff_reg SET image_path = '$filename' WHERE staff_reg.sid = '$sid'";
    //$query=mysqli_query($con,$sql);
	//move_uploaded_file($tempname, $folder);
if (mysqli_query($con,$sql) )
  {
?>
	<script>
		alert("Successfully updated");
		window.location="edit2.php";
	</script>
<?php 	}
	else
	{
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

}
elseif(isset($_POST['save6']))
{
  $pass=$_POST['pass'];
    $sid =$_POST['txtname'];
	
	$sql="UPDATE staff_reg SET password = '$pass' WHERE staff_reg.sid = '$sid'";
    //$query=mysqli_query($con,$sql);
	//move_uploaded_file($tempname, $folder);
if (mysqli_query($con,$sql) )
  {
?>
	<script>
		alert("Successfully updated");
		window.location="edit2.php";
	</script>
<?php 	}
	else
	{
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

}



?>

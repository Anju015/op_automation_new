<?php

include("../login/Dbconnection.php");
?>
<?php
if(isset($_POST['save1']))
{
  $address=$_POST['txtadd'];
    $pid =$_POST['txtname'];
	
	$sql="UPDATE patient_reg SET adress = '$address' WHERE patient_reg.pid = '$pid'";
    //$query=mysqli_query($con,$sql);
	//move_uploaded_file($tempname, $folder);
if (mysqli_query($con,$sql) )
  {
?>
	<script>
		alert("Successfully updated");
		window.location="edit_patient.php";
	</script>
<?php 	}
   else
	{
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

}
elseif(isset($_POST['save2']))
{
  $age=$_POST['txtemail'];
    $pid =$_POST['txtname'];
	
	$sql="UPDATE patient_reg SET age = '$age' WHERE patient_reg.pid = '$pid'";
    //$query=mysqli_query($con,$sql);
	//move_uploaded_file($tempname, $folder);
if (mysqli_query($con,$sql) )
  {
?>
	<script>
		alert("Successfully updated");
		window.location="edit_patient.php";
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
    $pid =$_POST['txtname'];
	
	$sql="UPDATE patient_reg SET phone = '$phone' WHERE patient_reg.pid = '$pid'";
    //$query=mysqli_query($con,$sql);
	//move_uploaded_file($tempname, $folder);
if (mysqli_query($con,$sql) )
  {
?>
	<script>
		alert("Successfully updated");
		window.location="edit_patient.php";
	</script>
<?php 	}
	else
	{
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

}

elseif(isset($_POST['save5']))
{
  $place=$_POST['user'];
    $pid =$_POST['txtname'];
	
	$sql="UPDATE patient_reg SET place = '$place' WHERE patient_reg.pid = '$pid'";
    //$query=mysqli_query($con,$sql);
	//move_uploaded_file($tempname, $folder);
if (mysqli_query($con,$sql) )
  {
?>
	<script>
		alert("Successfully updated");
		window.location="edit_patient.php";
	</script>
<?php 	}
	else
	{
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

}



?>

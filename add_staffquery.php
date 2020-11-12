<?php

include("Dbconnection.php");
if(isset($_POST['save']))
{
	
	
/*$id=$_POST['txtid'];*/
	$name=$_POST['txtname'];
	$post=$_POST['post'];
	$address=$_POST['txtadd'];
	$sex=$_POST['sex'];
	$email=$_POST['txtemail'];
	$phone=$_POST['txtphone'];
	$image_path=$_POST['image'];
	$username=$_POST['username'];
	$password=$_POST['txtpass'];
	$sql="INSERT INTO staff_details values('$id','$name','$post','$address','$sex','$email','$phone','$image_path','$username','$password')";
	move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/". $_FILES["image"]["name"]);
	mysqli_query("INSERT INTO login_tb1(username,password)values('$username','$password')");
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
alert("Successfully saved");
window.location="add_staff2.php";
</script>
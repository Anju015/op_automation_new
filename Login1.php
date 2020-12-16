<?php
session_start();
$uname=$_POST['txtname'];
$_SESSION['username']=$uname;
$pwd=$_POST['password'];
$_SESSION['password']=$pwd;
include 'Dbconnection.php';
$sql="select * from staff_reg where username='$uname' && password='$pwd'";
$query=mysqli_query($con,$sql);
if (isset($_POST['login'])) {
	// code...

if($row = mysqli_fetch_array($query))
{
	$t=$row['post'];
	echo $t;
    if($row['username']=='admin@1'&&$row['password']=='admin')
    {
        header("Location:admin/admin_home.php");
    }
 else if($t=="opstaff")
    {
        header("Location:op/opstaff_home.php");
    }
	else if($t=="doctor")
    {
        header("Location:doctor/doctor_home.php");
    }
 else if($t=="pharmacist")
    {
        header("Location:pharmacy/pharmacy_home.php");
    }

}

else
{
    ?>
<script>
alert("Invalid Username or Password");
window.location="Login.php";
</script>
<?php
}
}
?>

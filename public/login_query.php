<?php
session_start();
$uname=$_POST['txtname'];
$_SESSION['user']=$uname;
$pwd=$_POST['txtpass'];
$_SESSION['pswd']=$pwd;
include 'Dbconnection.php';
$sql="select * from staff_reg where username='$uname' && password='$pwd'";
$query=mysqli_query($con,$sql);
if($row = mysqli_fetch_array($query))
{

	$t=$row['post'];
	echo $t;
    if($t=="admin")
    {
        header("Location:admin_home.php");
    }
 else if($t=="opstaff")
    {
        header("Location:op_home.php");
    }
	else if($t=="doctor")
    {
        header("Location:doctor_home.php");
    }
 else if($t=="pharmacist")
    {
        header("Location:pharmacy_home.php");
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
?>

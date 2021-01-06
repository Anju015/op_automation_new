
<html>
<head></head>
<body bgcolor="#0033CC">

<center><h3 style="color:aliceblue;font-size: 18px;">Medicine deleted!.. </h3>
	
								<a href="medicine_view.php"  class="btn btn-primary" style="color:aliceblue;"><input type="button" value="BACK" /></a> 
							
<?php 
   include 'Dbconnection.php';
   $id = $_GET['id'];
   $res = mysqli_query($con,"DELETE FROM medicine WHERE id='$id' ");
   header('medicine_view.php');
?>
</body>
</html>
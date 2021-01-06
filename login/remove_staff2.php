<!-- style css -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<html>
<head>
	<meta charset="utf-8">
	<title>chc puthenchira</title>
	<script>
	function cc()
	{
		var regularExpression = new RegExp("^[a-z]+(\.[a-z0-9_\+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.([a-z]{2,4})$");
		if(f1.txtid.value=="")
		{
		alert('enter the staff id');
		    f1.txtid.focus();

		return false;
		}
		
  }
return true;
}
function function1()
{
  window.location('admin_home.php');
}
</script>





</head>
 <body background="images/b2.jpg">
<?php

	include("Dbconnection.php");
	/*include("add_staffquery.php");*/
?>
<div class="body" >
	<div class="top1">
		<div class="logo">
			<img src="pics/healthcare-bubble.jpg">
		</div>
	 <div class="head">
		<center>
		 <b style="color:brown;font-size: 30px;">CHC PUTHENCHIRA OP MANAGEMENT</b>
		</center>
	 </div>
	</div>
<!---heading------------------------------------------------------------------>

<!------ ------------------------------------------------------------->
	<div class="admin_body" style="margin-left: 20px;height: 1000px;background-color: #442D96;">
		<center>
		 <div class="part1" style="width:800px;height:970px;margin-left: 270px;">

			 <div class="modal-body" style="margin-top: 10px;">
				//<h2 style="color: cornsilk;margin-top: 20px;">STAFF DETAILS</h4>
 				<center>
				 <table>
					<form action="staff_removequery.php" method="POST" name="f1" enctype="multipart/form-data" class="form-donation">
            <div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px; ">STAFF ID</td>
									<td><input type="text" name="txtid" required></td>
								</div>
							
							<td>
								<input type="submit"  value="REMOVE" name="save" onClick="return cc()"/>
							</td>
                        </center>
						</tr>
				</form>
		</table>
	</center>
 </center>
</div>
</div>
</div>


</body>
</html>

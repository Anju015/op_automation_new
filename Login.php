<title>chc_puthenchira</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<html>
<head>
	<script type="text/javascript">
		function cc()
		{
				if (f1.txtname.value==" ") {
					alert("please enter Username");
					f1.txtname.focus();
					return false

				}
				return true;

		}

	</script>

</head>
<?php
	include("Dbconnection.php");
	/*include("add_staffquery.php");*/
?>
<body style="height:500px;">
	<div class="top1">
		<div class="logo">
			<img src="images/healthcare-bubble.jpg">
		</div>
		<div class="head">
			<center>
				<b style="color:brown;font-size: 30px;">CHC PUTHENCHIRA OP MANAGEMENT</b>
			</center>
		</div>
	</div>
	<div class="admin_body" style="margin-left: 20px;height: 650px;margin-bottom: 25px;">
		<div class="part1" style=" overflow: hidden;width: 500px;">
			<img src="images/login1.jpg" style="width: 250px;height: 250px">
		</div>
		<div class="part1" style="overflow: hidden;width:500px;background-color: #4B40D9;">
		  <center>
			<div class="small_image">
				<h2 style="color: cornsilk;margin-top: 25px;margin-top: 20px;">USER LOGIN</h4>
			</div>
	   <div class="modal-body" style="margin-top: 10px;">
 			<table>
			 <form action="Login1.php" method="post" name="f1" enctype="multipart/form-data" class="form-donation">
			  	<div class="row">
						<tr>
							<div class="form-group col-md-12 ">
								<td>
									<h3  style="color: azure;">User Name  &nbsp;&nbsp;&nbsp;</h3>
								</td>
								<td>
									<input type="text" name="txtname" class="form-control">
								</td>
							</div>
						</tr>
					</div>
					<div class="row">
						<tr>
							<div class="form-group col-md-12 ">
								<td >
									<h3 style="color: azure;">Password  &nbsp;&nbsp;&nbsp;</h3>
			  				</td>
								<td>
									<input type="password" name="password" class="form-control">
								</td>
		 					</div>
						</tr>
					</div>
					<tr></tr>
					<tr>
						<td></td>
						<td>
				 			<center>
								<input type="submit"  value="LOGIN" name="login" onClick="cc()"/>
								&nbsp;&nbsp;
						  	<input type="button" value="BACK" name="back1" onClick="javascript:history.go(-1)">



							</center>
						</td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
						<td style="width:150px;">
							<a href="forgot1.php">Forgot Password</a>
						</td>
					</tr>
				</form>
			</table>
		</center>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>chc_puthenchira</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	
	
	
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login_v1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/bootstrap/js/bootstrap.js">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v1/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v1/css/main.css">
<!--===============================================================================================-->
	
<!-home page->
<link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
<!-- [i...................-------------------

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
	<title>chc_puthenchira</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- style css -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- fevicon -->
	<link rel="icon" href="images/fevicon.png" type="image/gif" />
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

<!-------------------------------------------->
	<link rel="stylesheet" type="text/css" href="ccs/home.css">
	<link rel="stylesheet" type="text/css" href="ccs/menu.css">
<!--------------------------------------------->
</head>

	
<body>	
	
	<?php

		include("Dbconnection.php");
	?>
	
	
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
					<form action="login1.php" method="post" name="f1" enctype="multipart/form-data" class="form-donation">
						<div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td>
										<h3  style="color: azure;">User Name  &nbsp;&nbsp;&nbsp;</h3>  
									</td>
									<td>
										<input type="text" name="txtname" class="form-control"/>
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
										<input type="password" name="txtpass" class="form-control">
									</td>
			 					</div>
							</tr>
						</div>
							<tr></tr>
							<tr>
								<td></td>
								<td>
					    			<center>
										<input type="reset" value="BACK" onClick=" "> 
										&nbsp;&nbsp;
										<input type="submit"  value="LOGIN" name="login" onClick="return cc()"/>
									</center>
								</td>
							</tr>
					</form>
				</table>
			</center>
		</div>
	</div>
	
<!------------>
	
<!-----footer----->
	
	</div>
  </div>
</div>
</body>
</html>
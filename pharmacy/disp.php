<!doctype html>

<link rel="stylesheet" type="text/css" href="../ccs/home.css">
<link rel="stylesheet" type="text/css" href="../ccs/menu.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">
<html>
<head>
	<meta charset="utf-8">
	<title>chc puthenchira</title>



</head>

<body background="images/b2.jpg">

<?php

	include("Dbconnection.php");

?>

<div class="body" >
	<div class="top1">
		<div class="logo">
			<img src="../images/healthcare-bubble.jpg">
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
				<h2 style="color: cornsilk;margin-top: 20px;">DISPENSE</h4>
 				<center>
				 	<form action="disp2.php" method="POST" name="f1" enctype="multipart/form-data" class="form-donation">
            <div class="row">
              <table>
							 <tr>
							    <td style="color:aliceblue;font-size: 18px;">DATE</td>
							     <td><input type="date" name="txtdate" required>
								</td>
							</tr>
						</div>
            <div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px;" >PRESCRIPTION  ID</td>
									<td><input type="text" name="pid" ></td>
								</div>
							</tr>
						</div>
         			<tr>
                    <td>
								<a href="pharmacy_home.php"  class="btn btn-primary" style="color:aliceblue;"><input type="button" value="BACK" /></a>
							</td>
                            
								<td><input type="submit" name="view" value="VIEW" /></a>  </td>
							
							<td>
								<input type="reset" value="CLEAR" onClick=" ">
							</td>
							
						</tr>
				</form>
		</table>
        
         
	</center>
  </center>
</div>
</div>
<!------------>

<!-----footer----->

	</div>
   </div>
</div>

<div id="layoutAuthentication_footer">
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; CHC Puthenchira <?php echo date('Y'); ?></div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="http://localhost/chc1/public/admin-assets/js/scripts.js"></script>
</div>
</div>
</div>
</body>
</html>

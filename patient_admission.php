<!-- style css -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">
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
		if(!isNaN(f1.txtname.value))
	    {
		alert('Enter Name in character Format.');
		    f1.txtname.focus();
		return false;
		}

		if(f1.post.value=="")
		{
		alert('enter the designation of staff');
		    f1.post.focus();

		return false;
		}

		if(f1.txtadd.value=="")
		{
		alert('enter the address');
		    f1.txtadd.focus();

		return false;
		}
		if(f1.sex.value=="")
	    {
			alert('please select an option');
		    f1.sex.focus();
		return false;
		}
 		if(f1.txt.value=="")
		{
		alert('enter address');
		    f1.txtadd.focus();

		return false;
		}
		if(f1.txtname2.value=="")
		{
		alert('enter username');
		    f1.txtname2.focus();

		return false;
		}
		if(f1.txtpass.value=="")
		{
		alert('enter the password');
		    f1.txtpass.focus();

		return false;
		}
		if(f1.txtpass.value.length<=8)
 		{
   		alert("password should be atleast 8...");
    	f1.txtpass.focus();
   		return false;
  }
return true;
}
</script>
<script>
    function pageRedirect() {
      window.location.href = "opstaff_home.php";
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
				<h2 style="color: cornsilk;margin-top: 20px;">PATIENT ADMISSION</h4>
 				<center>
				 <table>
					<form action="patient_add_query.php" method="POST" name="f1" enctype="multipart/form-data" class="form-donation">
            <div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px; ">PATIENT ID</td>
									<td><input type="text" name="txtid" required></td>
								</div>
							</tr>
						</div>
						<div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px; ">NAME</td>
									<td><input type="text" name="txtname" required></td>
								</div>
							</tr>
						</div>
            <div class="row">
              <tr>
                <div class="form-group col-md-12 ">
                  <td style="color:aliceblue;font-size: 18px; ">AGE</td>
                  <td><input type="text" name="txtage" required></td>
                </div>
              </tr>
            </div>
            <tr>
							<td style="color:aliceblue;font-size: 18px;">GENDER</td>
								<td>
									<select name="sex" id="sex">
										<option value='select'>[select option]</option>
										<option value='male'>male</option>
										<option value='female'>female</option>
									</select>
								</td>
							</tr>
						</div>
            <div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px;">ADDRESS</td>
									<td><textarea name="txtadd" required></textarea></td>
								</div>
							</tr>
						</div>
						<div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px;">
										PHONE NUMBER
									</td>
									<td>
										<input type="text" name="txtphone" required>
									</td>
								</div>
							</tr>
						</div>
            <div class="row">
							<tr>
								<td style="color:aliceblue;font-size: 18px;">PLACE</td>
								<td>
									<input type="text" name="txtplace" required>
								</td>
							</tr>
						</div>
						<div class="row">
							<tr>
								<td style="color:aliceblue;font-size: 18px;">DATE</td>
								<td>
									<input type="date" name="txtdate" required>
								</td>
							</tr>
						</div>
						<tr>
            <tr></tr>
						<tr></tr>
            <tr>
							<td>
								<input type="submit" value="BACK" onClick="pageRedirect()"/>
							</td>
							<td>
								<input type="reset" value="CLEAR" onClick=" ">
							</td>
							<td>
								<input type="submit"  value="ADD" name="save" onClick="return cc()"/>
							</td>
						</tr>
				</form>
		</table>
	</center>
 </center>
</div>
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
</body>
</html>

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
				<h2 style="color: cornsilk;margin-top: 20px;">STAFF DETAILS</h4>
 				<center>
				 <table>
					<form action="add_staffquery.php" method="POST" name="f1" enctype="multipart/form-data" class="form-donation">
            <div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px; ">STAFF ID</td>
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
									<td style="color:aliceblue;font-size: 18px;">DESIGNATION</td>
                  <td>
  									<select name="post" id="post">
  										<option value='select'>[select option]</option>
  										<option value='doctor'>Doctor</option>
  										<option value='nurse'>Nurse</option>
                      <option value="pharmacist">Pharmacist</option>
  									</select>
  								</td>
								</div>
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
								<td style="color:aliceblue;font-size: 18px;">GENDER</td>
								<td>
									<select name="sex" id="sex">
										<option value='select'>[select option]</option>
										<option value='m'>male</option>
										<option value='f'>female</option>
									</select>
								</td>
							</tr>
						</div>
						<div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px;">
										EMAIL
									</td>
									<td>
										<input type="text" name="txtemail" required>
									</td>
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
								<td style="color:aliceblue;font-size: 18px;">UPLOAD IMAGE</td>
    							<td>
									<input type="file" name="images" id="images" required>
								</td>
							</tr>
						</div>
						<div class="row">
							<tr>
								<td style="color:aliceblue;font-size: 18px;">USERNAME</td>
								<td>
									<input type="text" name="username" required>
								</td>
							</tr>
						</div>
            <div class="row">
							<tr>
								<td style="color:aliceblue;font-size: 18px;">PASSWORD</td>
								<td>
									<input type="password" name="password" required>
								</td>
							</tr>
						</div>
            <tr></tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								<input type="submit" value="BACK" onClick="retun function1()"/>
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
</div>
</body>
</html>

<!doctype html>

<!-- style css -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">
<html>
<head>
	<meta charset="utf-8">
	<title>chc puthenchira</title> 
    
    </script>
    	
	<script>
	function cc()
	{					
		var regularExpression = new RegExp("^[a-z]+(\.[a-z0-9_\+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.([a-z]{2,4})$");
		if(f1.txtid.value=="")
		{
		alert('enter the stock id');
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
	
 
	
	
	
</head>

<body background="images/b2.jpg">
	
<?php

	include('Dbconnection.php' );
	/*include("add_stock2.php");*/
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
                 <h2 style="color: cornsilk;margin-top: 20px;"><center>DAILY OP</center></h4>
 				<center>
                
                
			<table width="400" border="0"  height="400">
                
            <form action="daily_op_query.php" method="POST" name="f1" enctype="multipart/form-data" class="form-donation">
						<div class="row" >
							<tr>
								<div class="form-group col-md-12 ">
    <tr>
   <tr>
<tr>
   <td style="color:aliceblue;font-size: 18px;">OPId</td>
     <td><input name="S2" type="text"></td>
      </tr>

 <tr>
<td style="color:aliceblue;font-size: 18px;">OP number</td>
    <td><input name="S1" type="text"></td>
  </tr>
  <tr>
   <td style="color:aliceblue;font-size: 18px;">Patient Id</td>
     <td><input name="S3" type="text"></td>
      </tr>
 <tr>
								<td style="color:aliceblue;font-size: 18px;">Room</td>
								<td>
									<select name="S4" id="sex">
										<option value='select'>[select option]</option>
										<option value='R1'>Room1</option>
										<option value='R2'>Room2</option>
									</select>
								</td>
							</tr>
   
   
       <tr>
    <td style="color:aliceblue;font-size: 18px;">Date</td>
    <td>
    <input name="S5" type="date">
   </td>
  </tr> 
 <tr>
     
                        </td>
							<td><a href="opstaff_home.php"  class="btn btn-primary" style="color:aliceblue;"><input style="width:75px;height:45px;"type="button" value="BACK" /></a> </td>

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
<!------------>
	
<!-----footer----->
	
	</div>
   </div>
</div>
</body>
</html>
			
			
























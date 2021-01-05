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
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var phoneno = /^\d{10}$/;
        
        var phoneno = /^\d{10}$/;
		if(f1.txtmail.value=="")
		{
		alert('enter a valid email!!');
		    f1.txtmail.focus();

		return false;
		}
		if(f1.txtphone.value=="")
		{
		alert('enter a valid number!!');
		    f1.txtphone.focus();

		return false;
		}
return true;
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
				<h2 style="color: cornsilk;margin-top: 20px;"></h4>
 				<center>
				 <table>
					<form action="editqu2.php" method="POST" name="f1" enctype="multipart/form-data" class="form-donation">
            <div class="row">
								<tr>
								<div class="form-group col-md-12 ">
									<td>
										<h3  style="color: azure;">Staff_id &nbsp;&nbsp;&nbsp;</h3>  
									</td>
									<td>
										<input type="text" name="txtname" class="form-control" required/>
                                        

									</td> 
								</div>
							</tr>
						<div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px;">
                                        ADDRESS
                                    </td>
									<td>
                                     <textarea name="txtadd"  rows="2" cols="33" maxlength="33"></textarea>
                                      <input type="submit"  value="UPDATE" name="save1" onClick="return editqu2.php"/></td>
								</div>
							</tr>
						</div>
						
						<div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px;">
										EMAIL
									</td>
									<td>
										<input type="text" name="txtemail" size="31" >
                                          <input type="submit"  value="UPDATE" name="save2" onClick="return cc()"/>
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
										<input type="text" name="txtphone" size="31">
                                           <input type="submit"  value="UPDATE" name="save3" onClick="return cc()"/>
									</td>
								</div>
							</tr>
						</div>
						
						<div class="row">
							<tr>
								<td style="color:aliceblue;font-size: 18px;">USERNAME</td>
								<td>
									<input type="text" name="user" size="31" >
                                  <input type="submit"  value="UPDATE" name="save5" onClick="return cc()"/>
								</td>
							</tr>
						</div>
            <div class="row">
							<tr>
								<td style="color:aliceblue;font-size: 18px;">PASSWORD</td>
            
								<td>
									<input type="password" name="pass"  size="31">
                                      <input type="submit"  value="UPDATE" name="save6" onClick="return cc()"/>
                                   
								</td>
							</tr>
						</div>
                <div class="row">
							<tr>
								<td style="color:aliceblue;font-size: 18px;">IMAGE</td>
    							<td>
									<input type="file" name="images" id="images" >
                                     <input type="submit"  value="UPDATE" name="save4" onClick="return cc()"/>
								</td>
							</tr>
						</div>
                
            <tr></tr>
                 <div class="row">
                     <tr>
                <td><a href="admin_home.php"  class="btn btn-primary" style="color:aliceblue;"><input style="width:75px;height:45px;"type="button" value="BACK" /></a> </td>
                     </tr>
					</div>
							<td>
								
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





<!doctype html>

<link rel="stylesheet" type="text/css" href="ccs/home.css">
<link rel="stylesheet" type="text/css" href="ccs/menu.css">
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
return true;
}
</script>





</head>

<body background="images/b2.jpg">


<?php
include('Dbconnection.php' );


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
				<h2 style="color: cornsilk;margin-top: 20px;">MEDICINE PRESCRIPTION</h4>
 				<center>
				 <table>
					<form action="prescription_query _add.php" method="POST" name="f1" enctype="multipart/form-data" class="form-donation">
            <div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px; ">PRESCRIPTION ID</td>
									<td><input type="text" name="presid" required></td>
								</div>
							</tr>
						</div>
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
							
						</div>
            <div class="row">
							
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px; ">AGE</td>
									<td><input type="text" name="txtage" required></td>
								</div>
							
						</div>
						<div class="row">
							
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px;">DISEASE</td>
                                   <td><textarea name="txtadd" required></textarea></td>
								</div>
							</tr>
						</div>
						<div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px;">MEDICINE 1</td>
									<td>
                                        <select  name="medicine" >
                                                     <option value="">Select Medicine</value>
                                                     <?php
                                                $result = mysqli_query($con,"SELECT * FROM medicine");
                                                while($row = mysqli_fetch_array($result)) {
                                                ?>
                                                     <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                                <?php } ?>    
                                                </select>
                
                                    </td>
                                    <td style="color:aliceblue;font-size: 18px; ">DOSAGE</td>
									<td><textarea name="dosage1" placeholder="null"></textarea></td>
                                    <td style="color:aliceblue;font-size: 18px; ">USAGE PERIOD</td>
									<td><input type="text" name="usage1" value ="null"></td>
								</div>
							</tr>
						</div>
                        <div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px;">MEDICINE 2</td>
									<td><select  name="medicine" >
                                                     <option value="">Select Medicine</value>
                                                     <?php
                                                $result = mysqli_query($con,"SELECT * FROM medicine");
                                                while($row = mysqli_fetch_array($result)) {
                                                ?>
                                                     <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                                <?php } ?>    
                                                </select>
                    
                                    </td>
                                    <td style="color:aliceblue;font-size: 18px; ">DOSAGE</td>
									<td><textarea name="dosage2" placeholder="null"></textarea></td>
                                    <td style="color:aliceblue;font-size: 18px; ">USAGE PERIOD</td>
									<td><input type="text" name="usage2" value="null"></td>
								</div>
							</tr>
						</div>
                        <div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px;">MEDICINE 3</td>
									<td><select  name="medicine" >
                                                     <option value="">Select Medicine</value>
                                                     <?php
                                                $result = mysqli_query($con,"SELECT * FROM medicine");
                                                while($row = mysqli_fetch_array($result)) {
                                                ?>
                                                     <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                                <?php } ?>    
                                                </select>
                                      </td>
                                    <td style="color:aliceblue;font-size: 18px; ">DOSAGE</td>
									<td><textarea name="dosage3" placeholder="null"></textarea></td>
                                    <td style="color:aliceblue;font-size: 18px; ">USAGE PERIOD</td>
									<td><input type="text" name="usage3"  value="null"></td>
								</div>
							</tr>
						</div>
                        <div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px;">MEDICINE 4</td>
									<td><select  name="medicine" >
                                                     <option value="">Select Medicine</value>
                                                     <?php
                                                $result = mysqli_query($con,"SELECT * FROM medicine");
                                                while($row = mysqli_fetch_array($result)) {
                                                ?>
                                                     <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                                <?php } ?>    
                                                </select>    </td>
                                    <td style="color:aliceblue;font-size: 18px; ">DOSAGE</td>
									<td><textarea name="dosage4" placeholder="null"></textarea></td>
                                    <td style="color:aliceblue;font-size: 18px; ">USAGE PERIOD</td>
									<td><input type="text" name="usage4" value="null"></td>
								</div>
							</tr>
						</div>
                        
                        
						
                        <div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px;">MEDICINE 5</td>
									<td><select  name="medicine" >
                                                     <option value="">Select Medicine</value>
                                                     <?php
                                                $result = mysqli_query($con,"SELECT * FROM medicine");
                                                while($row = mysqli_fetch_array($result)) {
                                                ?>
                                                     <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                                <?php } ?>    
                                                </select>                        </td>
                                    <td style="color:aliceblue;font-size: 18px; ">DOSAGE</td>
									<td><textarea name="dosage5" placeholder="null"></textarea></td>
                                    <td style="color:aliceblue;font-size: 18px; ">USAGE PERIOD</td>
									<td><input type="text" name="usage5" value="null"></td>
								</div>
							</tr>
						</div>
                        <div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px;">Other Medicines</td>
                                   <td><textarea name="txtmedi" placeholder="null"></textarea></td>
                                    <td style="color:aliceblue;font-size: 18px;">Usage</td>
                                   <td><textarea name="txtadd1" placeholder="null"></textarea></td>
								</div>
							</tr>
						</div>
                        
						<div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td style="color:aliceblue;font-size: 18px;">
										STATUS
									</td>
									<td>
                    <select name="post" id="status">
                      <option value='select'>[select option]</option>
                      <option value='doctor'>Admit</option>
                      <option value='nurse'>Not Admit</option>
                    </select>
									</td>
								</div>
							
						</div>
						</div>
						<div class="row">
							<tr>
								<td style="color:aliceblue;font-size: 18px;">DATE</td>
								<td>
									<input type="date" name="txtdate" required>
								</td>
							</tr>
						</div>
							</tr>
						</div>
						<tr>
							<td></td>
							<td></td>
							<td>
								<a href="doctor_home.php"  class="btn btn-primary" style="color:aliceblue;"><input type="button" value="BACK" /></a>
							</td>
							<td>
								<input type="reset" value="CLEAR" onClick=" ">
							</td>
							<td>
								<input type="submit"  value="ADD" name="save" onClick=""/>
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

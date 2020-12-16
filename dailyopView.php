<!------------------------------------------->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">
<!-- style css -->
<html>
<head>
	<meta charset="utf-8">
	 <title>chc puthenchira</title>
	 <!---------------------------->

	 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	 <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	 <style>
 	.table-content{border-top:#CCCCCC 4px solid; width:50%;}
 	.table-content th {padding:5px 20px; background: #F0F0F0;vertical-align:top;}
 	.table-content td {padding:5px 20px; border-bottom: #F0F0F0 1px solid;vertical-align:top;}
 	</style>
	 <!-------------------------->
	
    <script>
         function pageRedirect() {
      window.location.href = "doctor_home.php";
    }
        window.location('doctor_home.php');
    </script>
</head>
<?php
	include("Dbconnection.php");
	$post_at = "";
	$post_at_to_date = "";
	$queryCondition = "";
	if(!empty($_POST["search"]["post_at"]))
	{
		$post_at = $_POST["search"]["post_at"];
		list($fid,$fim,$fiy) = explode("-",$post_at);
		$post_at_todate = date('Y-m-d');
		if(!empty($_POST["search"]["post_at_to_date"]))
		{
			$post_at_to_date = $_POST["search"]["post_at_to_date"];
			list($tid,$tim,$tiy) = explode("-",$_POST["search"]["post_at_to_date"]);
			$post_at_todate = "$tiy-$tim-$tid";
		}
		$queryCondition .= "WHERE Date BETWEEN '$fiy-$fim-$fid' AND '" . $post_at_todate . "'";
	}
	$sql = "SELECT * from daily_op " . $queryCondition . " ORDER BY Date desc";
	$result = mysqli_query($con,$sql);
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
			 <h2 style="color: cornsilk;margin-top: 20px;">PATIENT RECORD</h4>
 				<center>
				 <table>
					<div class="demo-contet">
					<form action="#" method="POST" name="f1" enctype="multipart/form-data" class="form-donation">
            <div class="row">
							<tr>
								<td>
								<p class="search_input">
								 <input type="text" placeholder="From Date" id="post_at" name="search[post_at]"  value="<?php echo $post_at; ?>" class="input-control" />
							  </td>
							  <td>
							   <input type="text" placeholder="To Date" id="post_at_to_date" name="search[post_at_to_date]" style="margin-left:10px"  value="<?php echo $post_at_to_date; ?>" class="input-control"  />
							  </td>
								</p>
							 </tr>
							 <tr>
                <td>
								 <input type="submit" value="BACK" onClick="pageRedirect()">
							   <input type="submit"  style="width:120px;" value="SEARCH" name="go"/>
							 </td>
						</tr>
					</table>
					<br></br></br>

						<?php
						 if(!empty($result))
						 {
						?>
						<table class="table-content">
						  <thead>
					      <tr>
									  <th width="30%"><span>OPID</span></th>
										<th width="30%"><span>OP NUMBER</span></th>
						        <th width="50%"><span>PATIENT ID</span></th>
						        
															      </tr>
						     </thead>
						   <tbody>
						 <?php
								while($row = mysqli_fetch_array($result)) {
							?>
						    <tr>
									<td style="color:white;"><?php echo $row["opid"]; ?></td>
									<td style="color:white;"><?php echo $row["opno"]; ?></td>
									<td style="color:white;"><?php echo $row["pid"]; ?></td>
									
                                <td style="color:white;"><div class="tab1"><a href="med_view.php"><b style="color: white;font-size: 12px;">VIEW DETAILS</b></a></div></td>
								</tr>
						   <?php
								}
						   ?>
				</form>
		</table>
		<?php } ?>
	</center>
 </center>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
$.datepicker.setDefaults({
showOn: "button",
buttonImage: "../images/datepicker.png",
buttonText: "Date Picker",
buttonImageOnly: true,
dateFormat: 'dd-mm-yy'
});
$(function() {
$("#post_at").datepicker();
$("#post_at_to_date").datepicker();
});
</script>

</body>
</html>

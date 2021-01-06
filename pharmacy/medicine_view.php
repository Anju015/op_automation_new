<html>
<head>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" type="text/css" href="../css/home.css">

</head>

<?php

	include('Dbconnection.php' );
	$result = mysqli_query($con,"SELECT medicine.id,medicine.name,medicine.generic_name,category.category_name,medicine_type.type_name,medicine.strength,unit.unit_name,medicine.shelf_no
                              FROM medicine
                              JOIN category ON category.category_id = medicine.category
                              JOIN medicine_type ON medicine_type.id = medicine.type
                              JOIN unit ON unit.id = medicine.unit ");
?>
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
	<div class="admin_body" style="margin-left: 20px;height: 900px;background-color: #442D96;">
		<center>
		 <div class="part1" style="width:800px;height:970px;margin-left: 270px;">
			<h2 style="color: cornsilk;margin-top: 20px;">LIST OF MEDICINE</h4>
 				<center>
				 <div class="modal-body" style="margin-top: 10px;">
					<div class="card-body">
  				<div class="table-responsive">
				  <table border="2" class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
						<thead>
  						<tr>
								<th style="color:aliceblue;font-size: 18px;" >sl.no</th>
  							<th style="color:aliceblue;font-size: 18px;">NAME / GENERIC NAME</th>
              	<th style="color:aliceblue;font-size: 18px;">CATEGORY / TYPE</th>
              	<th style="color:aliceblue;font-size: 18px;">SHELF NO.</th>
              	<th style="color:aliceblue;font-size: 18px;">ACTION</th>
							</tr>
          	</thead>
            <tbody>
							<?php
                  if (mysqli_num_rows($result) > 0)
									 {
                  		$i=0;
                    	while($row = mysqli_fetch_array($result))
											{
              ?>
							<tr> </tr>
              <tr>
                <td style="color:aliceblue;font-size: 18px;"><?php echo ++$i; ?></td>
              	<td style="color:aliceblue;font-size: 18px;"><?php echo $row["name"].'/'.$row["generic_name"]; ?></td>
                <td style="color:aliceblue;font-size: 18px;"><?php echo $row["category_name"].'/'.$row["type_name"]; ?></td>
                <td style="color:aliceblue;font-size: 18px;"><?php echo $row["shelf_no"]; ?></td>
                <td>
                	<a href="medicine_add_stock.php?id=<?php echo $row["id"]; ?>"  class="btn btn-success" style="color:aliceblue;">Add Stock</a> &nbsp;&nbsp;
                  <a href="medicine_edit.php?id=<?php echo $row["id"]; ?>"  class="btn btn-primary" style="color:aliceblue;">Edit</a>  &nbsp;&nbsp;
                  <a href="medicine_delete.php?id=<?php echo $row["id"]; ?>"  class="btn btn-danger" style="color:aliceblue;">Delete</a></td>
              	</tr>
                <?php
							 				}
									 	}
								 ?>
              </tbody>
            </table>
						<a href="pharmacy_home.php"  class="btn btn-primary" style="color:aliceblue;">
							<input type="button" value="BACK"  style="width:70px;height:45px;"/>
						</a>
        	</div>
				</div>
			</center>
  	</center>
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

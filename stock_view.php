<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#0033CC">
	
<?php

	include('Dbconnection.php' );
    
	$result = mysqli_query($con,"SELECT medicine.*,stock.qty,stock.exp_date,stock.batch_no FROM medicine JOIN stock ON medicine.id=stock.medicine_id");
?>
<table  border="1" class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th style="color:aliceblue;font-size: 18px;">MEDICINE ID</th>
                                                <th style="color:aliceblue;font-size: 18px;">MEDICINE NAME</th>
                                                 <th style="color:aliceblue;font-size: 18px;">BATCH</th>
                                                <th style="color:aliceblue;font-size: 18px;">QUANTITY</th>
                                                <th style="color:aliceblue;font-size: 18px;">EXPIRY DATE</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                         <?php
                                            if (mysqli_num_rows($result) > 0) {   
                                            $i=0;
                                            while($row = mysqli_fetch_array($result)) {
                                            ?>
                                            
                                        <tr> </tr>
                                            <tr>
                                                <td style="color:aliceblue;font-size: 18px;"><?php echo ++$i; ?></td>
                                                <td style="color:aliceblue;font-size: 18px;"><?php echo $row["id"]; ?></td>
                                                <td style="color:aliceblue;font-size: 18px;"><?php echo $row["name"]; ?></td>
                                               <td style="color:aliceblue;font-size: 18px;"><?php echo $row["batch_no"]; ?></td>
                                                 <td style="color:aliceblue;font-size: 18px;"><?php echo $row["qty"]; ?></td>
                                                  <td style="color:aliceblue;font-size: 18px;"><?php echo $row["exp_date"]; ?></td>
                                                 <td>
                                                </td>
                                            </tr>
                                            <?php } } ?>
                                        </tbody>
                                    </table>
                                   
								<a href="pharmacy_home.php"  class="btn btn-primary" style="color:aliceblue;"><input type="button" value="BACK" /></a> 
				
</body>
</html>
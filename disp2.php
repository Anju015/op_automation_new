<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>









 <?php

 include 'Dbconnection.php';
         $dt=$_POST['txtdate'];      
        $prid =$_POST['pid'];
       // $pname = $_POST['pname'];
		
                  $sql="SELECT * FROM prescription_tabl WHERE presid='$prid' && date='$dt'";
                  $query=mysqli_query($con,$sql);
                  while ($row=mysqli_fetch_array($query)) {
                    // code...

            ?>
            <form action="disp3.php" method="POST" name="f2">
            <table>
            <div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td >PATIENT ID</td>
									<td><input type="text" name="txtid" value="<?php echo $row['pid']; ?>"></td>
								</div>
							</tr>
						</div>
						 <div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td >PATIENT NAME</td>
									<td><input type="text" name="txtname" value="<?php echo $row['name']; ?>"></td>
								</div>
							</tr>
						</div>
						

								<div class="form-group col-md-12 ">
									<td >DISEASE</td>
                                   <td><input name="txtadd" value="<?php echo $row['disease']; ?>"/></td>
								</div>
							</tr>
						</div>
						<div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td >MEDICINE 1</td>
									<td><input type="text" name="medicine1" value="<?php echo $medicine1 = $row['medicine1']; ?>"/>  </td>
                                    <td >DOSAGE</td>
									<td><input  name="dosage1" value="<?php echo $row['dosage1']; ?>" /></td>
                                    <td >USAGE PERIOD</td>
									<td><input type="text" name="usage1" value="<?php echo $row['usage1']; ?>"></td>
                                    <td >QUANTITY</td>
									<td><input type="text" name="qty1" ></td>
								</div>
							</tr>
						</div>
                        <div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td >MEDICINE 2</td>
									<td><input type="text" name="medicine2" value="<?php echo $medicine2 = $row['medicine2']; ?>"/>  </td>
                                    <td >DOSAGE</td>
									<td><input  name="dosage2" value="<?php echo $row['dosage2']; ?>" /></td>
                                    <td >USAGE PERIOD</td>
									<td><input type="text" name="usage2" value="<?php echo $row['usage2']; ?>"></td>
                                    <td >QUANTITY</td>
									<td><input type="text" name="qty2" ></td>
								</div>
							</tr>
						</div>
                        <div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td >MEDICINE 3</td>
									<td><input type="text" name="medicine3" value="<?php echo $medicine3 = $row['medicine3']; ?>"/>  </td>
                                    <td >DOSAGE</td>
									<td><input  name="dosage3" value="<?php echo $row['dosage3']; ?>" /></td>
                                    <td >USAGE PERIOD</td>
									<td><input type="text" name="usage3" value="<?php echo $row['usage3']; ?>"></td>
                                    <td >QUANTITY</td>
									<td><input type="text" name="qty3" ></td>
								</div>
							</tr>
						</div>
                        <div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td >MEDICINE 4</td>
									<td><input type="text" name="medicine4" value="<?php echo $medicine4 = $row['medicine4']; ?>"/>  </td>
                                    <td >DOSAGE</td>
									<td><input  name="dosage4" value="<?php echo $row['dosage4']; ?>" /></td>
                                    <td >USAGE PERIOD</td>
									<td><input type="text" name="usage4" value="<?php echo $row['usage4']; ?>"></td>
                                    <td >QUANTITY</td>
									<td><input type="text" name="qty4" ></td>
								</div>
							</tr>
						</div>
                        <div class="row">
							<tr>
								<div class="form-group col-md-12 ">
									<td >MEDICINE 5</td>
									<td><input type="text" name="medicine5" value="<?php echo $medicine5= $row['medicine5']; ?>"/>  </td>
                                    <td >DOSAGE</td>
									<td><input  name="dosage5" value="<?php echo $row['dosage5']; ?>" /></td>
                                    <td >USAGE PERIOD</td>
									<td><input type="text" name="usage5" value="<?php echo $row['usage5']; ?>"></td>
                                    <td >QUANTITY</td>
									<td><input type="text" name="qty5" ></td>
								</div>
							</tr>
						</div>
                        
            <?php 
          }
           ?>


						</div>
						</div>

							</tr>
						</div>
                        <tr></tr>
						<tr>
						<td></td><td></td><td></td><td></td>
							<td>
								<a href="disp.php"  class="btn btn-primary" style="color:aliceblue;"><input type="button" value="BACK" /></a>
							</td>
							
							<td>
							<button type="submit" onClick="window.print()">PRINT</button>
							</td>
						</tr>
                        </table>
                        </form>
</body>
</html>
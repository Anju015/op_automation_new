<HTML>
<head></head>
<body bgcolor="#3300FF">
<?php
include('Dbconnection.php' );

$id = $_GET['id'];
$res = mysqli_query($con,"SELECT medicine.id,medicine.name FROM medicine WHERE id='$id' ");
$r = mysqli_fetch_array($res);
?>



                          <h3>    ADD STOCK</h3>
                              
                           
                           
                           
                           
                            <form action="" method="post">
                            <table border="1">
                            <tr>
                           <td style="color:aliceblue;font-size: 18px;">  <label class="small mb-1" for="inputFirstName">Name</label></td>
                                       <td>     <input class="form-control py-4"  type="text" placeholder="Medicine Name" name="name" value="<?php echo $r['name']; ?>" />
                                            <input type="hidden"  name="id" value="<?php echo $r['id']; ?>" /></td>
                                            
                                            
                                            </tr>
                                            
                                            <tr>
                                         <td style="color:aliceblue;font-size: 18px;">   <label class="small mb-1" for="inputFirstName">Batch</label></td>
                                         <td>   <input class="form-control py-4"  type="text" name="batch" /></td>
                                        </div>
                                    </div> 
                                    <div class="col-md-6">
                                       <div class="form-group">
                                       <tr>
                                           <td style="color:aliceblue;font-size: 18px;"> <label class="small mb-1" for="inputFirstName">Expiry Date</label></td>
                                         <td>   <input class="form-control py-4"  type="date" name="exp" /></td>
                                        </div>
                                    </div>     
                                    <div class="col-md-6">
                                       <div class="form-group">
                                       <tr>
                                           <td style="color:aliceblue;font-size: 18px;"> <label class="small mb-1" for="inputFirstName">Quantity</label></td>
                                           <td> <input class="form-control py-4"  type="text" placeholder="Quantity" name="qty" /></td></tr>
                                        </div>
                                    </div> 
                                    <div class="col-md-12">
                                    <tr>
                                    <td><a href="medicine_view.php"  class="btn btn-primary" style="color:aliceblue;"><input type="button" value="BACK" /></a> </td>
                                     <td style="color:aliceblue;font-size: 18px;">  <button type="submit" class="btn btn-primary" name="save">Save</button></td>
                                     </tr>
                                    </div>
                              </div>
                              </table>  
                              </form>
                            </div>
                        </div> 
                        <?php
                                   
                                   if(isset($_POST['save'])){	 
                                        $medicine_id = $_POST['id'];
                                        $batch = $_POST['batch'];
                                        $exp = $_POST['exp'];
                                        $qty = $_POST['qty'];
                                        
                                        $sql = "INSERT INTO `stock`(`medicine_id`, `batch_no`, `qty`, `exp_date`) 
                                        VALUES ('$medicine_id','$batch','$qty','$exp')";
                                        if (mysqli_query($con, $sql)) {
                                            echo "New record created successfully !";
                                        } else {
                                            echo "Something Went Wrong!";
                                        }
                                      
                                    }
                                 ?>
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            <H3>   STOCK LIST</H3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table  border="1"class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th style="color:aliceblue;font-size: 18px;">#</th>
                                                <th style="color:aliceblue;font-size: 18px;">Batch</th>
                                                <th style="color:aliceblue;font-size: 18px;">Expiry</th>
                                                <th style="color:aliceblue;font-size: 18px;">Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $result = mysqli_query($con,"SELECT batch_no,qty,exp_date FROM stock WHERE medicine_id='$id' ");
                                            if (mysqli_num_rows($result) > 0) {   
                                            $i=0;
                                            while($row = mysqli_fetch_array($result)) {
                                            ?>
                                        
                                            <tr>
                                                <td style="color:aliceblue;font-size: 18px;"><?php echo ++$i; ?></td>
                                                <td style="color:aliceblue;font-size: 18px;"><?php echo $row["batch_no"]; ?></td>
                                                <td style="color:aliceblue;font-size: 18px;"><?php echo $row["exp_date"]; ?></td>
                                                <td style="color:aliceblue;font-size: 18px;"><?php echo $row["qty"]; ?></td>
                                            </tr>
                                            <?php } } ?>
                                        </tbody>
                                    </table>
                               
               
 </body>>
</HTML>
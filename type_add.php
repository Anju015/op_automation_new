<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<body bgcolor="#0000CC">
<center><h3 >TYPE ADD </h3>
 <form action="" method="post">
 <table>
 <tr>
                                <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            
                                            
                                            
                                         <td style="color:aliceblue;font-size: 18px;>
                                              <label class="small mb-1" for="inputFirstName"  >TYPE</label></td>
                                              </tr>
                                              <tr>
                                                <td><input class="form-control py-4"  type="text"  name="name" /></td>
                                                </tr>
                                            </div>
                                        </div>       
                                    </div>
                                    <tr><td></td>
                                  <td>  <div class="form-group mt-4 mb-0"><button name="save" class="btn btn-primary btn-block" type="submit">Save</button></div></td>
                                   <td><a href="pharmacy_home.php"  class="btn btn-primary" style="color:aliceblue;"><input type="button" value="BACK" /></a> </td>
							<td>
								<input type="reset" value="CLEAR" onClick=" ">
							</td>
                                  </tr>
                                  </table>
                                </form>
                                </center>



 <?php
                                   include 'Dbconnection.php';
                                   if(isset($_POST['save'])){	 
                                        $name = $_POST['name'];
                                        
                                        $sql = "INSERT INTO medicine_type (type_name) VALUES ('$name')";
                                        if (mysqli_query($con, $sql)) {
                                            echo "New record created successfully !";
                                        } else {
                                            echo "Something Went Wrong!";
                                        }
                                      
                                    }
                                 ?>

</body>
</html>
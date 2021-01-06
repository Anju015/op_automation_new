<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
<!-- style css -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" type="text/css" href="../css/home.css">
</head>

<body>
  <div class="top1">
    <div class="logo">
      <img src="../images/healthcare-bubble.jpg"> </div>
    <div class="head">
      <center>
        <b style="color:brown;font-size: 30px;">CHC PUTHENCHIRA OP MANAGEMENT</b>
      </center>
    </div>
  </div>
  <div class="body" >
<!---heading------------------------------------------------------------------>

<!------ ------------------------------------------------------------->
  <div class="admin_body" style="margin-left: 20px;height: 1000px;background-color: #442D96;">
    <center>
      <div class="part1" style="width:800px;height:970px;margin-left: 270px;">
        <div class="modal-body" style="margin-top: 10px;">
          <center>
            <h2 style="color: cornsilk;margin-top: 20px;">ADD CATEGORY</h4>
          </center>
          <center>
            <form action="" method="post">
              <table>
                <tr>
                  <div class="form-row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <td style="color:aliceblue;font-size: 18px;>
                          <label class="small mb-1" for="inputFirstName"  >Category</label></td>
                          <td></td>
                        <td><input class="form-control py-4"  type="text" placeholder="Category Name" name="name" /></td>
                    </tr>
                  </div>
                </div>
              </div>
                  <tr>
                    <td></td>
                    <td>
                        <div class="form-group mt-4 mb-0"><button name="save" style="width:75px;height:40px;" class="btn btn-primary btn-block" type="submit">Save</button></div></td>
                        <td>
    								       <input type="reset" value="CLEAR" onClick=" ">
    							      </td>
                    <td>
                      <a href="pharmacy_home.php"  class="btn btn-primary" style="color:aliceblue;"><input style="width:75px;height:40px;" type="button" value="BACK" /></a> </td>

                  </tr>
                </table>
              </form>
            </div>
          </div>
        </div>

                                <?php
                                   include 'Dbconnection.php';
                                   if(isset($_POST['save'])){
                                        $name = $_POST['name'];

                                        $sql = "INSERT INTO category (category_name) VALUES ('$name')";
                                        if (mysqli_query($con, $sql)) {
                                            echo "New record created successfully !";
                                        } else {
                                            echo "Something Went Wrong!";
                                        }

                                    }
                                 ?>

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

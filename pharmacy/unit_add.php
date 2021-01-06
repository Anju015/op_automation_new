
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>chc puthenchira</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" type="text/css" href="../css/home.css">
</head>
<body>
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
  <div class="body" >
    <div class="admin_body" style="margin-left: 20px;height: 1000px;background-color: #442D96;">
      <div class="part1" style="width:800px;height:970px;margin-left: 270px;">
          <div class="modal-body" style="margin-top: 10px;">
            <h2 style="color: cornsilk;margin-top: 20px;">UNIT ADD</h4>

              <form action="" method="post">
               <center>
                <table>
                  <tr>
                    <div class="form-row">
                      <div class="col-md-12">
                        <div class="form-group">
                           <td style="color:aliceblue;font-size: 18px;>
                            <label class="small mb-1" for="inputFirstName"  >UNIT</label>
                           </td>
                           <td></td>
                           <td>
                            <input class="form-control py-4"  type="text"  name="name" />
                           </td>
                        </div>
                      </div>
                    </div>
                  </tr>
                  <tr></tr>
                  <tr>
                    <td></td>
                    <td>
                      <div class="form-group mt-4 mb-0">
                        <button name="save" class="btn btn-primary btn-block" type="submit" style="width:80px;height:40px;">Save</button>
                      </div>
                    </td>
                    <td>
								      <input type="reset" value="CLEAR" onClick=" " style="width:80px;height:40px;">
							      </td>
                    <td>
                      <a href="pharmacy_home.php"  class="btn btn-primary" style="color:aliceblue;">
                        <input type="button" value="BACK" style="width:80px;height:40px;" />
                      </a>
                    </td>
                    <td></td>

                  </tr>
                </table>
              </form>
            </center>
          </div>
        </div>
      </div>



  <?php
                                   include 'Dbconnection.php';
                                   if(isset($_POST['save'])){
                                        $name = $_POST['name'];

                                        $sql = "INSERT INTO unit (unit_name) VALUES ('$name')";
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

<!-- style css -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">



<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>chc puthenchira</title>

  <script>
      function pageRedirect() {
        window.location.href = "index.php";
      }
  </script>
</head>
<body>
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
  <?php
    include("Dbconnection.php");

   ?>
   <div class="admin_body" style="margin-left: 20px;height: 1000px;background-color: #442D96;">
     <center>
      <div class="part1" style="width:800px;height:970px;margin-left: 270px;">

        <div class="modal-body" style="margin-top: 10px;">
         <center><h2 style="color: cornsilk;margin-top: 20px;">MESSAGES</h2></center>
           <center>
             <form method="post" action="forgot_view.php">
               <table>
                 <div class="row">
       							<tr>
       								<div class="form-group col-md-12 ">
       									<td style="color:aliceblue;font-size: 18px;">
                          Enter date:
                        </td>
                        <td><input type="date" name="date1" style="width:125px;height:45px;"></td>
                      </div>
                      </tr>
                      <tr></tr><tr></tr>
                    </div>
                      <tr>
                        <td>
                        <input type="submit" value="BACK" name="btnback" onClick=")"/>
                        <?php
                           if (isset($_POST['btnback'])) {

                       ?>
                         <script>
                             window.location.href="admin_home.php"
                         </script>
                       <?php
                             // code...
                           }
                         ?>
                       </td>
                        <td>
                          <input type="submit" name="save" value="view" style="">
                        </td>
                      </tr>
                    </table>
              <table class="table-content" border="3">
                <thead>
                    <tr>
                        <th style="color:white;" width="80%"><span>Name</span></th>
                        <th style="color:white;" width="80%"><span>Id</span></th>
                        <th style="color:white;" width="80%"><span>Designation</span></th>
                        <th  style="color:white;" width="80%"><span>Email</span></th>
                        <th  style="color:white;" width="80%"><span>Message</span></th>
                        <th style="color:white;" width="80%"><span>Date</span></th>
                        <th style="color:white;" width="80%"><span>Action</span></th>
                     </tr>
                    </thead>
              <tbody>

                  <?php
                  if(isset($_POST['save'])){
                    $d=$_POST['date1'];
                    $sql="SELECT * from complaint_tbl where date1='$d'";
                    $sql1=mysqli_query($con,$sql);
                    while ($result=mysqli_fetch_array($sql1)) {
                  ?>
                  <tr>
                      <td style="color:white;"><?php echo $result['staff_name'];?></td>
                      <td style="color:white;"><?php echo $result['staff_id'];?></td>
                      <td style="color:white;"><?php echo $result['staff_post'];?></td>
                      <td style="color:white;"><?php echo $result['email'];?></td>
                      <td style="color:white;"><?php echo $result['message'];?></td>
                      <td style="color:white;"><?php echo $result['date1'];?></td>
                      <td style="color:white;"><a href="delete1.php?id=<?php echo $result['cid'];?>">Delete</a></td>

                <?php
                    }
                  }

                   ?>
                </tr>
              </tbody>
              </form>
           </table>
          </center>
        </div>
      <div>
    </div>
</body>
</html>

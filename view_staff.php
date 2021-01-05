
<title>chc_puthenchira</title>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">
<!-- style css -->

<html>
 <head>
  <style>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
   th{ Color:black; }
 	.table-content{border-top:#CCCCCC 4px solid; width:50%;}
 	.table-content th {padding:5px 20px; background: #F0F0F0;vertical-align:top;}
 	.table-content td {padding:5px 20px; border-bottom: #F0F0F0 1px solid;vertical-align:top;}

  </style>
  <meta charset="utf-8">
	<title>chc puthenchira</title>
     <script>
    function pageRedirect() {
      window.location.href = "admin_home.php";
    }
</script>
</head>
<body background="images/b2.jpg">
 <div class="body" style="height: 700px;">
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
<!---heading----->
 <?php
  session_start();
  include 'Dbconnection.php';
 ?>
<!------ --->
<div class="admin_body" style="margin-left: 20px;margin-top: 8px;overflow: hidden; background-color:#442D96;">
 <center>
  <div class="part" style="width: 1000px; height=100px;">
	 <h2 style="color: cornsilk;margin-top: 25px;">VIEW STAFFS</h4>
    <div class="modal-body" style="margin-top: 10px;">
 		 <table>
			<form action="view_staff.php" method="POST" name="f1" enctype="multipart/form-data" class="form-donation">
        <tr>
          <td style="color:white;"> DESIGNATION :</td>
          <td>
            <p class="search_input">
            <select name="designation" id="post">
              <option name="" id="">choose</option>
              <option name="doctor" id="doctor">Doctor</option>
              <option name="nurse" id="nurse">Nurse</option>
              <option name="pharmacist" id="pharmacist">Pharmacist</option>
            </select>
          </p>
          </td>
        <tr>
          <td>
           <center>
               <td><a href="admin_home.php"  class="btn btn-primary" style="color:aliceblue;"><input style="width:75px;height:45px;"type="button" value="BACK" /></a> </td>
           
               <td>  <input type="submit"  value="SHOW" name="view" onClick="return cc()"/></td>
				    </center>
          </td>
        </tr>
       </table>
      </div>
      <table class="table-content">
        <thead>
          <tr>
              <th width="50%"><span>Name</span></th>
            <!---  <th width="50%"><span>Designation</span></th>-->
              <th width="50%"><span>Gender</span></th>
              <th width="50%"><span>Address</span></th>
              <th width="50%"><span>Phone Number</span></th>
              <th width="50%"><span>email</span></th>
              <th width="50%"><span>User Name</span></th>
              <th width="50%"><span>Password</span></th>
           </tr>
           </thead>
         <tbody>
         <tr>
            <?php
              if (isset($_POST['view'])) {
                $designation=$_POST['designation'];
                $sql="SELECT * FROM staff_reg WHERE post='$designation' ";
                $result=mysqli_query($con,$sql);
                $count=mysqli_num_rows($result);
              ?>
              <b style="color:white; font-size:20px;">
              <?php
                echo $designation;
              ?>
            </b>
            </center>
              <?php
              if ($count>0) {
                // code...

                while ($row=mysqli_fetch_array($result)) {

              ?>

              <tr>
                <td style="color:white;"><?php echo $row["name"]; ?></td>
                <!--<td style="color:white;"><?php echo $row["post"]; ?></td>-->
                <td style="color:white;"><?php echo $row["gender"]; ?></td>
                <td style="color:white;"><?php echo $row["address"]; ?></td>
                <td style="color:white;"><?php echo $row["phone"]; ?></td>
                <td style="color:white;"><?php echo $row["email"]; ?></td>
                <td style="color:white;"><?php echo $row["username"]; ?></td>
                <td style="color:white;"><?php echo $row["password"]; ?></td>  
              </tr>

            <?php
                  // code...
                }

             ?>
          </td>
        </tr>
      </table>
      <?php
    }
      // code...
    }
       ?>
    </form>

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

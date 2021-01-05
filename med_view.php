<title>chc_puthenchira</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
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
      window.location.href = "dailyopView.php";
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
  <div class="part" style="width: 1320px; height=100px;">
	 <h2 style="color: cornsilk;margin-top: 25px;">PATIENT DETAILS</h4>
    <div class="modal-body" style="margin-top: 10px;">
 		 <table>
			<form action="#" method="POST" name="f1" enctype="multipart/form-data" class="form-donation">
        <tr>
          <td style="color:white;"> DESIGNATION :</td>
          <td>
            <p class="search_input">
           <td style="color:aliceblue;font-size: 18px; ">PATIENT ID</td>
									<td><input type="text" name="txtid" required></td>
          </p>
          </td>
        <tr>
          <td>
           <center>
             <input type="submit" value="BACK" onClick="pageRedirect()">
				     <input type="submit"  value="SHOW" name="view" onClick="return cc()"/>
				    </center>
          </td>
        </tr>
       </table>
      </div>
      <table class="table-content">
        <thead>
          <tr>
              <th width="50%"><span>PRESCRIPTION ID</span></th>
            <!---  <th width="50%"><span>NAME</span></th>-->
              <th width="50%"><span>AGE</span></th>
              <th width="50%"><span>DIAGNOSIS</span></th>
              <th width="50%"><span>MEDICINE1</span></th>
              <th width="50%"><span>MEDICINE2</span></th>
              <th width="50%"><span>MEDICINE3</span></th>
              <th width="50%"><span>MEDICINE4</span></th>
              <th width="50%"><span>MEDICINE5</span></th>
              <th width="50%"><span> OTHER MEDICINES</span></th>
              <th width="150%"><span>DATE</span></th>




           </tr>
           </thead>
         <tbody>
         <tr>
            <?php
            //  if (isset($_POST['view'])) {
              //  $pid=$_POST['txtid'];
                //$sql="SELECT * FROM prescription_tbl WHERE prescription_tbl.pid='$pid' ";
                //$result=mysqli_query($con,$sql);
                //while ($row=mysqli_fetch_array($result)) {
              //  $count=mysqli_count($row);
              if (isset($_POST['view'])) {
                $id=$_POST['txtid'];
                $sql3="SELECT * FROM prescription_tabl WHERE prescription_tabl.pid='$id'";
                $result=mysqli_query($con,$sql3);
                while ($row=mysqli_fetch_array($result)) {
                  // code...

              ?>
            </center>
              <tr>
                <td style="color:white;"><?php echo $row["presid"]; ?></td>
                <!--<td style="color:white;"><?php echo $row["name"]; ?></td>-->
                <td style="color:white;"><?php echo $row["age"]; ?></td>
                <td style="color:white;"><?php echo $row["disease"]; ?></td>
                <td style="color:white;"><?php echo $row["medicine1"]; ?></td>
                <td style="color:white;"><?php echo $row["medicine2"]; ?></td>
                <td style="color:white;"><?php echo $row["medicine3"]; ?></td>
                <td style="color:white;"><?php echo $row["medicine4"]; ?></td>  
                <td  style="color:white;"><?php echo $row["medicine5"]; ?></td>
                   <td style="color:white;"><?php echo $row["othermedicine"]; ?></td>
                <td style="color:white;" width ="3cm"><?php echo $row["date"]; ?></td>  
  
              </tr>

            <?php
          }
          // code...
        }
             ?>
          </td>
        </tr>
      </table>
      <?php

      // code...
    //}
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

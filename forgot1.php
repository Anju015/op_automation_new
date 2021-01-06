<!-- style css -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/home.css">



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
         <h2 style="color: cornsilk;margin-top: 20px;">REQUEST FOR PASSWORD</h2>
           <center>
             <form method="post" action="forgot1.php">
               <table>
                 <div class="row">
     							<tr>
     								<div class="form-group col-md-12 ">
     									<td style="color:aliceblue;font-size: 18px; ">STAFF NAME</td>
     									<td><input type="text" name="name" ></td>
     								</div>
     							</tr>
     						</div>
                <div class="row">
                 <tr>
                   <div class="form-group col-md-12 ">
                     <td style="color:aliceblue;font-size: 18px; ">Staff Id</td>
                     <td><input type="text" name="sid" ></td>
                   </div>
                 </tr>
               </div>
               <div class="row">
                <tr>
                  <div class="form-group col-md-12 ">
                    <td style="color:aliceblue;font-size: 18px; ">Staff Designation</td>
                    <td><input type="text" name="post" ></td>
                  </div>
                </tr>
              </div>
               <div class="row">
                <tr>
                  <div class="form-group col-md-12 ">
                    <td style="color:aliceblue;font-size: 18px; "> Email</td>
                    <td><input type="email" name="mailid"><br></td>
                  </div>
                </tr>
              </div>
              <div class="row">
               <tr>
                 <div class="form-group col-md-12 ">
                   <td style="color:aliceblue;font-size: 18px; "> Enter date</td>
                   <td><input type="date" name="date1"><br></td>
                 </div>
               </tr>
             </div>
              <tr>
                <td></td>
                <td>
                  <input type="submit" name="send_message_btn" value="SEND">
                </td>
            </form>
            <form action="forgot1.php" method="post">
                <td>
  								<input type="submit" value="BACK" name="back"/>
                  <?php
                      if (isset($_POST['back'])) {
                  ?>
                      <script>window.location="index.php";</script>
                  <?php      // code...
                      }
                   ?>
  							</td>
            </tr>
             </form>
           </table>
         </center>
       </div>
      <div>
    </div>
</body>
</html>
<?php
//include("Dbconnection.php");
if (isset($_POST['send_message_btn'])) {
  $name = $_POST['name'];
  $id1 = $_POST['sid'];
  $post1= $_POST['post'];
  $msg = "Request for password";
  $email=$_POST['mailid'];
  $d1=$_POST['date1'];
  $i=0;

  $sql="INSERT INTO complaint_tbl VALUES('$i','$name','$id1','$post1','$msg','$email','$d1')";
  if(mysqli_query($con,$sql))
  {
?>
    <script>
      alert("message sent successfully");
      window.location("forgot1.php");
    </script>
<?php
      $i++;
  }
  else
  {
    // code...
?>
    <script>
      alert("something wrong!");
    //  window.location("forgot1.php")
    </script>
<?php
  }

}
?>

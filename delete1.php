
<html>
  <head>
  </head>
  <body bgcolor="#0033CC">
    <center>
      <h3 style="color:aliceblue;font-size: 18px;">deleted successfully !.. </h3>
				<a href="forgot_view.php"  class="btn btn-primary" style="color:aliceblue;">
          <input type="button" value="BACK" />
        </a>
<?php
   include 'Dbconnection.php';
   $id = $_GET['id'];
   $res = mysqli_query($con,"DELETE FROM complaint_tbl WHERE cid='$id' ");
   header('forgot_view.php');
?>
</body>
</html>

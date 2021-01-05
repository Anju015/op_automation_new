<?php
include("Dbconnection.php");
if (isset($_POST['send_message_btn'])) {
  $name = $_POST['name'];
  $id1 = $_POST['sid'];
  $post1= $_POST['post'];
  $msg = "Request for password";
  $email=$_POST['mailid'];
  $i=0;

  $sql="INSERT INTO complaint_tbl VALUES('$i','$name','$id1','$post1','$msg','$email')";
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
  else {
    // code...
?>
    <script>
      alert("something wrong!");
    </script>
<?php
  }

}
?>

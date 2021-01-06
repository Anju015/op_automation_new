<?php

    include('Dbconnection.php');


    if(isset($_row['sid']))
    {
      //$sid=$_POST['txtid'];
      $sql="DELETE FROM staff_reg WHERE sid='$id'";

    	if (mysqli_query($con,$sql) )
      {
    ?>
    	<script>
    		alert("Successfully removed");
    		window.location="remove_staff.php";
    	</script>
    <?php 	}
    	else
    	{
          echo "Error: " . $sql . "<br>" . mysqli_error($con);
    	}

    }
?>

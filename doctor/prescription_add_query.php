<?php

include("Dbconnection.php");
?>
<?php
if(isset($_POST['save']))
{
  $presid=$_POST['presid'];
  $pid=$_POST['txtid'];
	$name=$_POST['txtname'];
	$age=$_POST['txtage'];
	$desease=$_POST['txtadd'];
    $medicine1=$_POST['med_name1'];
    $dosage1=$_POST['dosage1'];
    $usage1=$_POST['usage1'];
    $medicine2=$_POST['med_name2'];
    $dosage2=$_POST['dosage2'];
    $usage2=$_POST['usage2'];
    $medicine3=$_POST['med_name3'];
    $dosage3=$_POST['dosage3'];
    $usage3=$_POST['usage3'];
    $medicine4=$_POST['med_name4'];
    $dosage4=$_POST['dosage4'];
    $usage4=$_POST['usage4'];
    $medicine5=$_POST['med_name5'];
    $dosage5=$_POST['dosage5'];
    $usage5=$_POST['usage5'];
    $Othermedicine=$_POST['txtmedi'];
    $medusage=$_POST['txtadd1'];
	  $status=$_POST['status'];
	   $date=$_POST['txtdate'];
	$sql="INSERT INTO prescription_tabl  VALUES ('$presid','$pid','$name','$age','$desease','$medicine1',
    '$dosage1','$usage1','$medicine2','$dosage2','$usage2','$medicine3','$dosage3','$usage3','$medicine4',
    '$dosage4','$usage4','$medicine5','$dosage5','$usage5','$Othermedicine','$medusage','$status','$date')";
	if (mysqli_query($con,$sql) )
  {
?>
	<script>
		alert("Successfully saved");
		window.location="doctor_prescription.php";
	</script>
<?php 	}
	else
	{
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

}
?>

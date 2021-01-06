<html>
<head></head>
<body bgcolor="#000099">
<?php 
    include 'Dbconnection.php';
    $id = $_GET['id'];
    $res = mysqli_query($con,"SELECT * FROM medicine WHERE id='$id' ");
    $r = mysqli_fetch_array($res);
?>
<center> <H2  style="color:aliceblue;font-size: 18px;">EDIT MEDICINE</H2>
  <form action="" method="post">
  <table border="1">
      <tr>
        <td  style="color:aliceblue;font-size: 18px;"> Medicine Name</td>
        <td> <input type="text" placeholder="Medicine Name" name="medicine_name" value="<?php echo $r['name']; ?>"/>
        <input type="hidden"  name="med_id" value="<?php echo $r['id']; ?>"/>
        </td>
      </tr>
      <tr>
  			<td  style="color:aliceblue;font-size: 18px;"> Generic Name </td>
            <td><input type="text" placeholder="Generic Name" name="generic_name" value="<?php echo $r['name']; ?>" /></td>
       </tr>
       <tr>
 			<td  style="color:aliceblue;font-size: 18px;">Category</td> 
            <td><select name="category" >
    <?php
        $result1 = mysqli_query($con,"SELECT * FROM category");
        while($row1 = mysqli_fetch_array($result1)) {  ?>
                <option <?php echo ($r['category'] == $row1['category_id']) ? 'selected' : ''; ?> value="<?php echo $row1['category_id']; ?>"><?php echo $row1['category_name']; ?></option>
    <?php } ?>    
  </select></td>
  			</tr>
            <tr>
				<td  style="color:aliceblue;font-size: 18px;"> Type</td>
                <td><select name="type" >
     <?php
        $result2 = mysqli_query($con,"SELECT * FROM medicine_type");
        while($row2 = mysqli_fetch_array($result2)) { ?>
            <option <?php echo ($r['type'] == $row2['id']) ? 'selected' : ''; ?> value="<?php echo $row2['id']; ?>"><?php echo $row2['type_name']; ?></option>
     <?php } ?>    
  </select></td>
  			</tr>
            <tr>
  					<td  style="color:aliceblue;font-size: 18px;">Description</td>
                    <td><textarea type="text" placeholder="Description" name="description" ><?php echo $r['name']; ?></textarea></td>
                    </tr>
                    <tr>
 						<td  style="color:aliceblue;font-size: 18px;"> Strength</td>
                        <td><input type="text" placeholder="Strength" name="strength" /></td>
                     </tr>
                     <tr>
                     
 							<td  style="color:aliceblue;font-size: 18px;">Unit</td>
                            <td> <select name="unit" >
      <?php
         $result3 = mysqli_query($con,"SELECT * FROM unit");
          while($row3 = mysqli_fetch_array($result3)) { ?>
                <option <?php echo ($r['unit'] == $row3['id']) ? 'selected' : ''; ?> value="<?php echo $row3['id']; ?>"><?php echo $row3['unit_name']; ?></option>
       <?php } ?>     
   </select></td>
   				</tr>
                <tr>
 					<td  style="color:aliceblue;font-size: 18px;">Shelf No.</td>
                    <td>  <input class="form-control py-4"  type="text" placeholder="Shelf No." name="shelf_no" value="<?php echo $r['name']; ?>" />  </td>
                 </tr>
                 <tr>     
  					<td  style="color:aliceblue;font-size: 18px;">Price</td>
                    <td> <input class="form-control py-4"  type="text" placeholder="Price" name="price" value="<?php echo $r['name']; ?>" /></td>
                    </tr>
                    <tr>
                    <td><a href="medicine_view.php"  class="btn btn-primary" style="color:aliceblue;"><input type="button" value="BACK" /></a> </td>
   					<td><button name="save" class="btn btn-primary btn-block" type="submit"  >Save</button> </td>
                    </tr>
                    </table>
   </form> 
   </center>          
   <?php
                                   
    if(isset($_POST['save'])){	 
        $medicine_name = $_POST['medicine_name'];
        $generic_name = $_POST['generic_name'];
        $category = $_POST['category'];
        $type = $_POST['type'];
        $description = $_POST['description'];
        $strength = $_POST['strength'];
        $unit = $_POST['unit'];
        $shelf_no = $_POST['shelf_no'];
        $price = $_POST['price'];
		$med_id = $_POST['med_id'];
        
        $sql = "UPDATE `medicine` SET `name`='$medicine_name', `generic_name`='$generic_name', `category`='$category',
         `type`='$type', `strength`='$strength', `description`='$description', `unit`='$unit', `shelf_no`='$shelf_no',
          `price`='$price' where id='$med_id' "; 
       
        if (mysqli_query($con, $sql)) {
            header('medicine_view.php');
        } else {
            header('medicine_view.php');
        }
        
    }
    ?>                          
    </body>
    </html>
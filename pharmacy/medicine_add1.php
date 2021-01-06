
<?php

include("Dbconnection.php");
?>


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

                                        $sql = "INSERT INTO `medicine`(`name`, `generic_name`, `category`, `type`, `strength`, `description`, `unit`, `shelf_no`, `price`, `image`)
                                        VALUES ('$medicine_name','$generic_name','$category','$type','$strength','$description','$unit','$shelf_no','$price','')";
                                        if (mysqli_query($con, $sql)) {
                                            echo "New record created successfully !";
                                        } else {
                                            echo "Something Went Wrong!";
                                        }

                                    }
                                 ?>

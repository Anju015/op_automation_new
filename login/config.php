<?php
define('DB_SERVER','localhost:3306');
define('DB_USER','root');
define('DB_PASS' ,'Anusree@1');
define('DB_NAME', 'opautomation');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
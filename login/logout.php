<?php
include("Dbconnection.php");
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
header("Location:Login.php");
?>

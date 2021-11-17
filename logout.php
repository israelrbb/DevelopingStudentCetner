<?php
session_start();
$_SESSION['email'] = "";
$_SESSION['firstname'] = "";
if(empty($_SESSION['email'])) header("location: landingpage.php");
?>

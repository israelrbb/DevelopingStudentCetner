
<?php
 session_start();
 if(isset($_SESSION['studentID']) && $_SESSION['studentID'] != "")
 {
      echo '<h2>Welcome Back - '.$_SESSION["firstName"].'!'.'</h2>';
 }
 else
 {
      header("location:login.php");
 }
 ?>

<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<html lang='en'>
<head>
    <h1>Student Portal</h1>
<head>
<body style="background-color:#1c87c9;">
    <h3>More Info</h3>
 <p>
    <ul>
        <nav><a href="curretnclasses.php">Class Schedule</a></nav>
        <nav><a href="classes.php">Avaulable Classes</a></nav>
        <nav><a href="userprofile.php">Manage Profile</a></nav>
        <nav><a href="logout.php">Logout</a></nav>
    </ul>
    <div>
<body>

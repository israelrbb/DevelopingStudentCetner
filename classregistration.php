<div>
		<h2>You Selected:</h2>
        
		<?php
         require('database.php');
			if (isset($_POST['submit'])){
				foreach ($_POST['id'] as $id):
                    global $pdo;
 
				$sq= "SELECT * FROM `classes` where courseid='$id'";

                $result = $pdo->query($sq);
                while($srow=$result->fetch()){
                $courseid   = $srow['courseID'];
                $Course   = $srow['Course'];
                $Title  = $srow['Title'];
     
                $sql = "INSERT INTO assignedclass (courseid, Course, Title)
                VALUES (?,?,?)";
                $stmtinsert = $pdo->prepare($sql);
                $result2 = $stmtinsert -> execute([$courseid ,$Course, $Title]);
                if($result2){
                    echo "Course $Title Added". "<br>";
                } else{
                    echo "Error saving user info. ";
                }
            }
				endforeach;
            }
		?>


<!DOCTYPE html>
<html lang='en'>
<head>


<head>
  <body style="background-color:#404040;">
    <ul>
      <nav><a href="homepage.php">Return to homepage</a></nav>
      <nav><a href="currentclasses.php">View Current Classes</a></nav>
    </ul>
    <div>
  <body>



  <!DOCTYPE html>
<html lang='en'>
<head>


<head>
  <body style="background-color:#404040;">
    <ul>
      <nav><a href="homepage.php">Return to homepage</a></nav>
      <nav><a href="currentclasses.php">View Current Classes</a></nav>
    </ul>
    <div>
  <body>
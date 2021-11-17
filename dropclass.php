<div>
		<h2>Course Dropped:</h2>
        
		<?php
         require('database.php');
			if (isset($_POST['submit'])){
				foreach ($_POST['id'] as $id):
                    global $pdo;
                    $sql = "DELETE FROM assignedclass WHERE courseID=$id";

                      echo "Class Dropped successfully";


				endforeach;
            }
		?>
<!DOCTYPE html>
<html lang='en'>
<head>


<head>
  <body style="background-color:#404040;">
    <h3>Log in or Register below</h3>
    <ul>
      <nav><a href="homepage.php">Return to homepage</a></nav>
      <nav><a href="currentclasses.php">View Current Classes</a></nav>
    </ul>
    <div>
  <body>



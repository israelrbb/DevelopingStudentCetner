<?php include("database.php");
session_start();

$sql = "SELECT * FROM assignedclass ORDER BY Title";
$result = $pdo->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <section>
        <h1>Available Classses</h1>
        <form action="classregistration.php" method="post">
        <table border=2>
            <tr>
                <th>Select Course to add</th>
                <th>Select Class To Drop</th>
                <th>Title</th>
                <th>Credits</th>
            </tr>
            <?php  
                while($rows=$result->fetch())
                {
             ?>
            <tr>
                <td><input type="checkbox" value="<?php echo $rows['courseID']; ?>" name="id[]"></td>
                <td><?php echo $rows['Course'];?></td>
                <td><?php echo $rows['Title'];?></td>
                <td><?php echo $rows['Credits'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
<input type="submit" name="submit" value="Submit">
	</form>
</html>

<!DOCTYPE html>
<html lang='en'>
<head>


<head>
  <body style="background-color:#404040;">
    <ul>
      <nav><a href="homepage.php">Return to homepage</a></nav>
      <nav><a href="classes.php">View Available Courses</a></nav>
    </ul>
    <div>
  <body>
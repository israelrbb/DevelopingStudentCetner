<?php
function executeSelectQuery()
 {
     $sql = "SELECT * FROM user where email = '".$_SESSION["email"]."'";
     global $pdo;

     $result = $pdo->query($sql);

     while ($row = $result -> fetch()) {
         echo "<hr>";
         echo "<br>studentID = $row[studentID]";
         echo "<br>First Name = $row[firstName]";
         echo "<br>Last Name=$row[lastName]";
         echo "<br>Password=$row[password]";
         echo "<br>Email=$row[email]";
         echo "<br>Adrress=$row[address]";
         echo "<br>Phone=$row[phone]";

}

  ?>

<?php
 session_start();
 try {
      require('database.php');
      if(isset($_POST["login"])) {
                $query = "SELECT * FROM studentuser WHERE studentID = :studentID AND password = :password";
                $stmt = $pdo->prepare($query);
                $stmt->execute(
                     array(
                          'studentID'     =>     $_POST["studentID"],
                          'password'     =>     $_POST["password"]
                     )
                );
                $count = $stmt->rowCount();
                $row   = $stmt->fetch(PDO::FETCH_ASSOC);
                if($count == 1 && !empty($row)) {
                     $_SESSION['studentID'] = $row['studentID'];
                     $_SESSION["firstName"] = $row["firstName"];
                     $_SESSION['lastName'] = $row['lastName'];
                     $_SESSION["email"] = $row["email"];
                     $_SESSION['password'] = $row['password'];
                     $_SESSION["address"] = $row["address"];
                     $_SESSION['phone'] = $row['phone'];
                     $_SESSION["ssn"] = $row["ssn"];
                     header("location:homepage.php");
                }
                else {
                  header("location:login.php");
                }

      }
 }
 catch(PDOException $error)
 {
      $message = $error->getMessage();
 }

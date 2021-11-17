<?php
    require_once('database.php');
        if(isset($_POST['create'])){
            $userName   = $_POST['userName'];
            $firstName  = $_POST['firstName'];
            $lastName   = $_POST['lastName'];
            $password   = $_POST['password'];
            $email      = $_POST['email'];
            $address    = $_POST['address'];
            $phone      = $_POST['phone'];
            $ssn        = $_POST['ssn'];

            $sql = "INSERT INTO studentuser (studentID, firstName, lastName, password, email, address, phone, ssn)
            VALUES (?,?,?,?,?,?,?,?)";
            $stmtinsert = $pdo->prepare($sql);
            $result = $stmtinsert -> execute([$userName, $firstName, $lastName, $password, $email, $address, $phone, $ssn]);
            if($result){
                echo 'Account Registered:  ';
            } else{
                echo "Error saving user info. ";
            }


            echo $userName . "" .' Created';
        }
        ?>

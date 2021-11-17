<?php
try {
$con = "mysql:host=localhost;
dbname=studentcenter";
$user = "root";
$pass = "";

$pdo =new PDO($con, $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $e) {
    die( $e->getMessage() );
}

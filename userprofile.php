<?php include("database.php");
session_start();
require("functions.php");
?>

<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<html lang='en'>
<title>
    <h1>Profile Management</h1>
</title>
<header>
    <header> <h1> Account Manager </h1>
    <h3>Current User Information <h3></header>
<p>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <div class="container">
            <div class ="row">
                <div class ="col-sm-3">
                    <label for='studentID'>studentID</label>
                    <input class="form-control" type="text" value="<?php echo $_SESSION['studentID'];?>">

                    <label for='firstName'>FirstName</label>
                    <input class="form-control" type="text" value="<?php echo $_SESSION['firstName'];?>">

                    <label for='lastname'>LastName</label>
                    <input class="form-control" type="text" value="<?php echo $_SESSION['lastName'];?>" >

                    <label for='password'>Password</label>
                    <input class="form-control" type="password" value="<?php echo $_SESSION['password'];?>">

                    <label for='email'>Email</label>
                    <input class="form-control" type="email" value="<?php echo $_SESSION['email'];?>">

                    <label for='address'>Address</label>
                    <input class="form-control" type="text" value="<?php echo $_SESSION['address'];?>">

                    <label for='phone'>Phone</label>
                    <input class="form-control" type="text" value="<?php echo $_SESSION['phone'];?>">

                    <label for='ssn'>SSN</label>
                    <input class="form-control" type="text"value="<?php echo $_SESSION['ssn'];?>">

                </div>
            </div>

        <input type="submit" name="create" value="Edit Values" >

        <form>

    <div>

<body>
<body>
<nav>
    <a href="login.html">Click here to login</a></nav>
    <nav><a href="index.php">Return to Home Page</a></nav>
<body>

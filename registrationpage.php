<?php
    require_once('database.php');
    ?>

<!DOCTYPE html>
<html>
<head>
    <h1>New Student Registration<h1>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color:#1c87c9;">

<?php
require('reginfo.php');
?>

<h1>Please complete the form below<h>

    <form action="reginfo.php" method="post">
        <div class="container">
            <div class ="row">
                <div class ="col-sm-3">
                    <label for='studentID'>studentID</label>
                    <input class="form-control" type="text" name="userName" required>

                    <label for='firstName'>FirstName</label>
                    <input class="form-control" type="text" name="firstName" required >

                    <label for='lastname'>LastName</label>
                    <input class="form-control" type="text" name="lastName" required >

                    <label for='password'>Password</label>
                    <input class="form-control" type="password" name="password" required>

                    <label for='email'>Email</label>
                    <input class="form-control" type="email" name="email" required>

                    <label for='address'>Address</label>
                    <input class="form-control" type="text" name="address" required>

                    <label for='phone'>Phone</label>
                    <input class="form-control" type="text" name="phone" required>
                </div>
            </div>

        <input type="submit" name="create" value="Sign Up" >

        <form>

    <div>

<body>

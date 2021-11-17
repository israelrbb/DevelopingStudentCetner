<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body style="background-color:#404040;">
		<div class="login">
			<h1>User Login</h1>
			<form action="authentication.php" method="post">
			<label for="studentID">
				<i class="fas fa-user"></i>
			</label>
                <input type="text" name="studentID" placeholder="studentID" required class="form-control" />
                    <br />
			<label for="password">
				<i class="fas fa-lock"></i>
			</label>
                <input type="password" name="password" placeholder="Password" required class="form-control" />
                    <br />
                <input type="submit" name="login" class="btn btn-info" value="Login" />
               </form>
		</div>
	</body>
</html>

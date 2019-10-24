<!-- https://code.tutsplus.com/tutorials/create-a-php-login-form--cms-33261 -->

<?php
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit;
} else {
    // Show users the page!
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>

<div class="jumbotron">
	<div class="container text-center">
		<h1>VERY BASIC LOGIN</h1>
        <div id="loreg">
            <ul class="list-inline">
                <li>
                    <a class="btn btn-primary btn-lg" href="login.php">Login</a>
                </li>
                <li>
                    <a class="btn btn-primary btn-lg" href="register.php">Register</a>
                </li>
            </ul>
        </div>
        <div id="username">
            <p>
                You're logged in as <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a>
            </p>
        </div>
        </div>
   
	</div>
</div>

</body>
</html>

<?php
}
?>
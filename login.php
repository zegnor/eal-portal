<?php 

include "admin_helpmeee/login-logic.php";

session_start(); // Starting Session
if (!isset($_SESSION["isStudentIn"])) {
    $_SESSION["isStudentIn"] = false;
}
if(!isset($_SESSION["isTeacherIn"])) {
    $_SESSION["isTeacherIn"] = false;
}

if (isset($_POST['login-bt'])) {
	checkLogin();
}


$msg = '';


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Project Portal</title>
	<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css" >
</head>

    <body>
<header>
<a href="index.php"><img class="logo" src="logo.svg"></a>
<img class="corner" src="corner.png">



<ul class="navigation">
  <li style="background-color:#006f79; " ><a href="index.php">Home</a></li>
  <li><a href="projects.php" >Projects</a></li>
  <li><a href="network.php">Network</a></li>
  <li ><a href="companies.php">For Companies</a></li>
</ul>
</header>

<div class="login-container">
<?php //echo $_SESSION['testing']; ?>
	<form method="post">

				<div>
					<p></p>
					<div>
						<input type="username" name="username" id="username" placeholder="Username">
					</div>
				</div>
				<div>
					<p></p>
					<div>
						<input type="password" name="password" id="password" placeholder="Password">
					</div>
				</div>
				<div class="loginbt">
				<p></p>
					<input type="submit" name="login-bt" value="Login"></div>
			</form>
		</div>
<?php include ("footer.php"); ?>


</body>
</html>



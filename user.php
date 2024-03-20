<?php
	session_start();
	include "connection.php";
	if (isset($_SESSION['email']) && isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME - USER</title>
	<link rel="website icon" type="png" href="img/LOGO.png">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="container-content animate">
			<div class="container1">
                <div class="lform">
				<div class="logout"><a href="logout.php"><img src="img/logout.svg" alt="Logout"/></a></div>
				<?php echo "Welcome to User Dashboard,"?><br/>
				<?=$_SESSION['name']?>
				</div>
			</div>
		</div>
	</div>

		<video id="vbg" autoplay loop muted poster="bg/LBG-P.png">
			<source src="bg/LBG.mp4" type="video/mp4">
		</video>
</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>
<?php
	session_start();
	if (!isset($_SESSION['email']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>K</title>
	<link rel="website icon" type="png" href="img/LOGO.png">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/container.css">
</head>
<body>
		<div class="container">
		<form class="container-content animate" action="login.php" method="post">
			<div class="imgcontainer">
				<img src="img/LOGO.png" alt="logo" class="logo1">
			</div>
			<div class="container1">
			<?php if (isset($_GET['error'])) { ?>
			<div class="alert alert-danger" role="alert">
				<?=$_GET['error']?>
			</div>
			<?php } ?>
			<div class="txt_field">
			<input type="email" name="email" id="email" required>
			<span></span>
			<label for="email">EMAIL</label>
			</div>
			<div class="txt_field">
			<input type="password" name="password" id="password" required>
			<span></span>
			<label for="password">PASSWORD</label>
            <div class="eye_toggle"><i class="bi bi-eye-slash" id="togglePassword"></i></div>
			</div>
			<div class="lform">
			<label class="acct">LOGIN AS:</label>
			<select class="slc" name="acc_type">
				<option selected value="user">USER</option>
				<option value="admin">ADMIN</option>
			</select></div><br/>
			<div class="lform">
				<button id="btn" type="submit">LOG IN</button>
			</div>
		</div>
		</form>
		</div>

	<video id="vbg" autoplay loop muted poster="bg/LBG-P.png">
		<source src="bg/LBG.mp4" type="video/mp4">
	</video>
    <script src="script.js"></script>
</body>
</html>
<?php }else{
	header("Location: acc_type.php");
} ?>
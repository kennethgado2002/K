<?php
	session_start();
	include "connection.php";
	if (isset($_SESSION['email']) && isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME - Admin</title>
	<link rel="website icon" type="png" href="img/LOGO.png">
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/modal.css">
</head>
<body>
<header class="header">
		<img class="logo" src="img/p1-LOGO.png" alt="Logo">
		<nav class="navbar">
			<a class="tuln" href="#">TAB 1</a>
			<a class="tuln" href="#">TAB 2</a>
            <a href=""></a>
		</nav>
	</header>
    <div class="action">
        <div class="profile" onclick="menuToggle();">
			<img src="img/p-LOGO.png" />
        </div>
        <div class="menu">
			<h3><?=$_SESSION['name']?><br /><span>Admin</span></h3>
		<ul>
            <li>
				<img src="img/profile.svg" alt="Profile"/><button class="am" onclick="document.getElementById('profile').style.display='block'">Profile</button>
            </li>
            <li>
				<img src="img/logout.svg" alt="Logout"/><button class="am" onclick="document.getElementById('logout').style.display='block'">Logout</button>
            </li>
		</ul>
        </div>
	</div>

  <div id="logout" class="modal">
    <div class="modal-content animate" action="/action_page.php" method="post">
      <div class="container">
        <div class="confirmm"><?php echo "You sure about that?" ?></div>
        <a href="logout.php" class="lgo"><button class="btnnn">YES</button></a>
        <a href="index.php" class="lgo"><button class="btnnn">CANCEL</button>
      </div>
  </div>
</div>
<div id="profile" class="modal">
    <div class="modal-content animate" action="/action_page.php" method="post">
      <div class="hcontainer">
        <span onclick="document.getElementById('logout').style.display='none'" class="close" title="Close Modal">&times;</span>
      </div>
      <div class="container">
      <?php echo "Hello World!"?>
      </div>
  </div>
</div>

		<video id="vbg" autoplay loop muted poster="bg/LBG-P.png">
			<source src="bg/PBG.mp4" type="video/mp4">
		</video>
		<script src="script.js"></script>
</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>
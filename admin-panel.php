<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Covid Tracker</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="symbol"><img src="images/logo.png" alt="" /></span><span class="title">Covid Tracker</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php">Overview</a></li>
							<li><a href="symptoms.html">Symptoms</a></li>
							<li><a href="prevention.html">Prevention</a></li>
							<li><a href="get-help.php">Treatment / Help</a></li>
							<li><a href="contact-us.php">Contact Us</a></li>
							<?php 
							if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) { 
							?>
								<li><a href="assets/php/logout.php">Logout</a></li>
							<?php 
							} else {
							?>
								<li><a href="login.php">SignIn</a></li>
							<?php } ?>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Hi <?php echo $_SESSION['username']; ?>, Welcome to admin panel!</h1>
								<p>Select the module you wanna see:</p>
							</header>
							<section class="tiles">
								<article class="style3">
									<span class="image">
										<img src="images/admin.png" alt="" />
									</span>
									<a href="users.php">
										<h2>Users</h2>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/admin.png" alt="" />
									</span>
									<a href="help-info.php">
										<h2>Help Info</h2>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/admin.png" alt="" />
									</span>
									<a href="messages.php">
										<h2>Messages</h2>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/admin.png" alt="" />
									</span>
									<a href="add-place.php">
										<h2>Countries</h2>
									</a>
								</article>
							</section>
						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php

	session_start();

	// //check if the user is not logged in, then
	// if(!isset($_SESSION['userid']) || $_SESSION['userid'] !== true){
	// 	$_SESSION['username'] = "";
	// }

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
								<a href="index.html" class="logo">
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
							<li><a href="get help.html">Treatment / Help</a></li>
							<li><a href="contact.html">Contact Us</a></li>
                            <?php if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) { 
							?>
							<li><a href="assets/php/logout.php">Logout</a></li>
								<?php } else {?>
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
									<a href="users-table.html">
										<h2>Users</h2>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/admin.png" alt="" />
									</span>
									<a href="help-info.html">
										<h2>Help Info</h2>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/admin.png" alt="" />
									</span>
									<a href="assets/php/messages.php">
										<h2>Messages</h2>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/admin.png" alt="" />
									</span>
									<a href="assets/php/add-place.php">
										<h2>Places</h2>
									</a>
								</article>
								<!-- <article class="style2">
									<span class="image">
										<img src="images/Italy.png" alt="" />
									</span>
									<a href="italy.html">
										<h2>Italy</h2>
										<div class="content">
											<p>Cases : 4035617<br>Deaths : 121033<br>Recovered : 3484042</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/Germany.png" alt="" />
									</span>
									<a href="germany.html">
										<h2>Germany</h2>
										<div class="content">
											<p>Cases : 3405610<br>Deaths : 83678<br>Recovered : 3012100</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="images/Canada.png" alt="" />
									</span>
									<a href="canada.html">
										<h2>Canada</h2>
										<div class="content">
											<p>Cases : 1224314<br>Deaths : 24257<br>Recovered : 1117284</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/Australia.png" alt="" />
									</span>
									<a href="australia.html">
										<h2>Australia</h2>
										<div class="content">
											<p>Cases : 29813<br>Deaths : 910<br>Recovered : 28599</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/Kuwait.png" alt="" />
									</span>
									<a href="kwait.html">
										<h2>Kuwait</h2>
										<div class="content">
											<p>Cases : 273991<br>Deaths : 1563<br>Recovered : 257261</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/Brazil.png" alt="" />
									</span>
									<a href="brazil.html">
										<h2>Brazil</h2>
										<div class="content">
											<p>Cases : 14446541<br>Deaths : 395324<br>Recovered : 12992442</p>
										</div>
									</a>
								</article> -->
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
<?php

	require_once $_SERVER['DOCUMENT_ROOT'] . '/CovidTracker/assets/php/config.php';
	
	session_start();

	//check if the user is not logged in, then
	
	if(!isset($_SESSION['userid'])){ //|| $_SESSION['userid'] !== true){
		$_SESSION['userid'] = "";
		$_SESSION['username'] = "";
	}
	
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
								<h1>Hi <?php echo $_SESSION['username']; ?>, See the realtime Pakistan and Worldwide<br />
								situation of <a href="https://en.wikipedia.org/wiki/COVID-19">COVID-19</a>.</h1>
								<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people who fall sick with COVID-19 will experience mild to moderate symptoms and recover without special treatment.</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/world.png" alt="" />
									</span>
									<a href="world.html">
										<h2>World</h2>
										<div class="content">
											<p>Cases : 152638586<br>Deaths : 3201764<br>Recovered : 89979425</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/Pakistan.png" alt="" />
									</span>
									<a href="pakistan.html">
										<h2>Pakistan</h2>
										<div class="content">
											<p>Cases : 850131<br>Deaths : 18677<br>Recovered : 747755</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/USA.png" alt="" />
									</span>
									<a href="usa.html">
										<h2>USA</h2>
										<div class="content">
											<p>Cases : 33116664<br>Deaths : 590215<br>Recovered : 25713185</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/India.png" alt="" />
									</span>
									<a href="india.html">
										<h2>India</h2>
										<div class="content">
											<p>Cases : 19549656<br>Deaths : 215523<br>Recovered : 15981772</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/France.png" alt="" />
									</span>
									<a href="france.html">
										<h2>France</h2>
										<div class="content">
											<p>Cases : 5642359<br>Deaths : 104706<br>Recovered : 4590568</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/Russia.png" alt="" />
									</span>
									<a href="russia.html">
										<h2>Russia</h2>
										<div class="content">
											<p>Cases : 4814558<br>Deaths : 110520<br>Recovered : 4436583</p>
										</div>
									</a>
								</article>
								<article class="style2">
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
								</article>
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; E Lara. All rights reserved</li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
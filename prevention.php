<!DOCTYPE HTML>
<html>
	<head>
		<title>Prevention</title>
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
							<h1>Prevention</h1>
							<span class="image main"><img src="images/prevention.png" alt="" /></span>
							<p>Protect yourself and others around you by knowing the facts and taking appropriate precautions. Follow advice provided by your local health authority.</p>
							<h3>To prevent the spread of COVID-19:</h3>
							<ul>
								<li>Clean your hands often. Use soap and water, or an alcohol-based hand rub.</li>
								<li>Maintain a safe distance from anyone who is coughing or sneezing.</li>
								<li>Wear a mask when physical distancing is not possible.</li>
								<li>Don’t touch your eyes, nose or mouth.</li>
								<li>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</li>
								<li>Stay home if you feel unwell.</li>
								<li>If you have a fever, cough and difficulty breathing, seek medical attention.</li>
							</ul>
							<p>Calling in advance allows your healthcare provider to quickly direct you to the right health facility. This protects you, and prevents the spread of viruses and other infections.</p>
							<h3>Masks</h3>
							<p>Masks can help prevent the spread of the virus from the person wearing the mask to others. Masks alone do not protect against COVID-19, and should be combined with physical distancing and hand hygiene. Follow the advice provided by your local health authority.</p>
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
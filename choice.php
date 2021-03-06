<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Covid Tracker</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" type="text/css" href="assets/less/choice.css" />
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

						</div>
					</header>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Choose:</h1>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/user.png" alt="" />
									</span>
									<a href="login.php?q=admin" >
										<h2>Admin</h2>
								
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/user.png" alt="" />
									</span>
									<a href="login.php">
										<h2>User</h2>
										
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

					
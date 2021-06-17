<?php 
    session_start();

    if(isset($_SESSION["error"])) {
        $error = $_SESSION["error"];
        unset($_SESSION["error"]);
    } else {
        $error = "";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        
		<!-- js code for quiz. -->
		<!-- <script>
			var nameValue = document.getElementById("name").value;
			var emailValue = document.getElementById("email").value;
			var messageValue = document.getElementById("message").value;
            var checkedValue = document.querySelector('robotcheck:checked').value;
        </script> -->
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
                            <h1>Contact Us</h1>
							<span class="image main"><img src="images/contactus.png" alt="" /></span>
							
                            <section>
                                <h2>Get in touch</h2>
                                <form action="assets/php/contact.php" method="POST">
                                    <div class="fields">
                                        <div class="field half">
                                            <input type="text" name="name" id="name" required="required" placeholder="Name" />
                                        </div>
                                        <div class="field half">
                                            <input type="email" name="email" id="email" required="required" placeholder="Email" />
                                        </div>
                                        <div class="field">
                                            <textarea name="message" id="message" required="required" placeholder="Message"></textarea>
                                        </div>
                                    </div>
									<div class="g-recaptcha" data-sitekey="WEBSITEKEYHERE" data-theme="light" data-size="normal" data-image="image"></div>
									<script src="https://www.google.com/recaptcha/api.js" async defer></script>
									<p>
										<small style="color: red;"><?php print $error; ?></small>
									</p>
                                    <ul class="actions">
                                        <li><input type="submit" value="Send" name="submit" class="primary" /></li>
                                    </ul>
                                </form>
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
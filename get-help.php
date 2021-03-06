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
        <title>Treatment</title>
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
                            <h1>Treatment</h1>
							<span class="image main"><img src="images/treatment.png" alt="" /></span>
                            <p>Scientists around the world are working to find and develop treatments for COVID-19.</p>
                            <ul>
								<li>Optimal supportive care includes oxygen for severely ill patients and those who are at risk for severe disease and more advanced respiratory support such as ventilation for patients who are critically ill.</li>
								<li>Dexamethasone is a corticosteroid that can help reduce the length of time on a ventilator and save lives of patients with severe and critical illness.</li>
                            </ul>
							
                            <h1>Get Help for Covid</h1>
							<p>WHO does not recommend self-medication with any medicines, including antibiotics, as a prevention or cure for COVID-19. If you or anyone you know is going through a rough patch and is in need of help to get through COVID-19, you can apply for help below.</p>
                            
							<!-- Form -->
								<section>
									<h2>Fill in the Form</h2>
									<form action="gethelp.php" method="POST">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="name" id="name" value="" required="required" placeholder="Name" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="email" name="email" id="email" value="" required="required" placeholder="Email" />
											</div>
											<div class="col-12">
												<select name="category" id="category" required="required">
													<option value="">- Category -</option>
													<option value="1">Most Common Symptoms</option>
													<option value="2">Less Common Symptoms</option>
													<option value="3">Serious Symptoms</option>
													<option value="4">Emergency</option>
												</select>
											</div>
											<div class="col-3 col-12-small">
												<p>Average Blood Pressure:</p>
											</div>
											<div class="col-3 col-12-small">
												<input type="radio" id="priority-low" name="priority" checked>
												<label for="priority-low">Low</label>
											</div>
											<div class="col-3 col-12-small">
												<input type="radio" id="priority-normal" name="priority">
												<label for="priority-normal">Normal</label>
											</div>
											<div class="col-3 col-12-small">
												<input type="radio" id="priority-high" name="priority">
												<label for="priority-high">High</label>
											</div>
											<div class="col-12">
												<textarea name="message" id="message" required="required" placeholder="Enter your message" rows="6"></textarea>
											</div>
											<div class="col-6 col-12-small">
												<input type="checkbox" id="copy" name="copy">
												<label for="copy">Email me a copy</label>
											</div>
											<div class="col-6 col-12-small">
												<input type="checkbox" id="human" name="human" required="required" checked>
												<label for="human">Not a robot</label>
											</div>
											<div class="col-12">
												<p>
													<small style="color: red;"><?php print $error; ?></small>
												</p>
												<ul class="actions">
													<li><input type="submit" value="Get Help" class="primary" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
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
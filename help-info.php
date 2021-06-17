<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . '/CovidTracker/assets/php/config.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>cards</title>
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
								<a href="admin-panel.php" class="logo">
									<span class="symbol"><img src="images/logo.png" alt="" /></span><span class="title">Covid Tracker</span>
                                </a>

						</div>
					</header>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>The Needy</h1>
                        
                            <!-- Table -->
                            <section>
                                <div class="table-wrapper">
                                <?php
										$query = "SELECT * from help limit 100;";
										$queryResult = $db->query($query);
									?>
										<table>
											<thead>
												<tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Category</th>
                                                    <th>Average BP</th>
                                                    <th>Message</th>
												</tr>
											</thead>
									<?php
										while ($queryRow = $queryResult->fetch_row()) {
											echo "<tr>";
											for($i = 0; $i < $queryResult->field_count; $i++){
												echo "<td>$queryRow[$i]</td>";
											}
											echo "</tr>";
										}
									?>
										</table>
									<?php
										$db->close();
									?>
                                    <!-- <table class="alt">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Category</th>
                                                <th>Average BP</th>
                                                <th>Message</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Item One</td>
                                                <td>Ante@gmail.bpm</td>
                                                <td>29.99</td>
                                                <td>Mild</td>
                                                <td>blah blah blah</td>
                                            </tr>
                                        </tbody>
                                    </table> -->
                                </div>
                            </section>
                        
                        </div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>&copy; E Lara. All rights reserved</li>
							</ul>
						</div>
					</footer>

			</div>
	</body>
</html>
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
							<h1>Countries</h1>
							<ul class="actions">
									<li><a href="assets/php/create.php" class="button large"><i class="fa fa-plus"></i> Add a Country</a></li>
							</ul>
                            <!-- Table -->
                            <section>
                                <div class="table-wrapper">
									<?php
										$query = "SELECT * from places limit 100;";
										$result = $db->query($query);
									?>
										<table>
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Cases</th>
													<th>Deaths</th>
													<th>Recovered</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
												<?php
													while($row = $result->fetch_array()){
														echo "<tr>";
															echo "<td>" . $row['id'] . "</td>";
															echo "<td>" . $row['name'] . "</td>";
															echo "<td>" . $row['cases'] . "</td>";
															echo "<td>" . $row['deaths'] . "</td>";
															echo "<td>" . $row['recovered'] . "</td>";
															echo "<td>";
																echo '<a href="assets/php/read.php?id='. $row['id'] .'" class="icon style1" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>  ';
																echo '<a href="assets/php/update.php?id='. $row['id'] .'" class="icon style1" title="Update Record" data-toggle="tooltip"><span class="fa fa-edit"></span></a>  ';
																echo '<a href="assets/php/delete.php?id='. $row['id'] .'" class="icon style1" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
															echo "</td>";
														echo "</tr>";
													}

												?>
											</tbody>
										</table>
									<?php
										$db->close();
									?>
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

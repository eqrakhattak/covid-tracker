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

		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script>
			$(document).ready(function(){
				$('.search-box input[type="text"]').on("keyup input", function(){
					/* Get input value on change */
					var inputVal = $(this).val();
					var resultDropdown = $(this).siblings(".result");
					if(inputVal.length){
						$.get("backend-search.php", {term: inputVal}).done(function(data){
							// Display the returned data in browser
							resultDropdown.html(data);
						});
					} else{
						resultDropdown.empty();
					}
				});
				
				// Set search input value on click of result item
				$(document).on("click", ".result p", function(){
					$(this).parents(".search-box").find('input[type="text"]').val($(this).text());
					$(this).parent(".result").empty();
				});
			});
		</script>

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

							<div class="row">
								<div>
									<ul class="actions">
										<li><a href="assets/php/create.php" class="button large"><i class="fa fa-plus"></i> Add a Country</a></li>
									</ul>
								</div>
								<form method="POST" action="">
									<div class="search-box">
										<input type="text" autocomplete="off" name="search" placeholder="Search country..." />
										<div class="result"></div>
									</div>	
								</form>
							</div>
                            <!-- Table -->
                            <section>
                                <div class="table-wrapper">
									<?php
										if(search-box.empty()){
											$query = "SELECT * from places limit 100;";
										}
										else{
											$country=$_POST['search'];
											$query = "SELECT * from places WHERE name='$country';";
										}

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

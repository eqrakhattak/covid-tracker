<?php

    require_once "config.php";

    $id = $_GET['id'];

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $cases = $_POST['cases'];
        $deaths = $_POST['deaths'];
        $recovered = $_POST['recovered'];

        $sql = "UPDATE places SET name='$name', cases='$cases', deaths='$deaths, recovered='$recovered where id=$id; ";

        if(mysqli_query($db,$sql)){
            header('Location: /CovidTracker/add-place.php');
        }else{
            echo "<div class='alert alert-danger'>Error: There was an error while updating place</div>";
        }
    }

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>cards</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/CovidTracker/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">
							<!-- Logo -->
								<a href="/CovidTracker/admin-panel.php" class="logo">
									<span class="symbol"><img src="/CovidTracker/images/logo.png" alt="" /></span><span class="title">Covid Tracker</span>
								</a>

						</div>
					</header>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Update Place</h1>
							
                            <section>
                                <form action="update.php" method="POST">

                                <div class="col-12">
										<p>Place ID = <?php echo $id ?></p>
                                </div>
                                <div class="fields">
                                    
                                        <div class="field">
                                            <input type="text" name="name" id="name" placeholder="Name" />
                                        </div>
                                        <div class="field">
                                            <input type="text" name="cases" id="email" placeholder="Cases" />
                                        </div>
                                        <div class="field">
                                            <input type="text" name="deaths" id="deaths" placeholder="Deaths" />
                                        </div>
                                        <div class="field">
                                            <input type="text" name="recovered" id="recovered" placeholder="Recovered" />
                                        </div>
                                    
                                </div>
                                    <ul class="actions">
                                        <li><input type="submit" value="Update" name="submit" class="primary" /></li>
                                    </ul>
                                </form>
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

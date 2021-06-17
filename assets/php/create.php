<?php
    require_once 'config.php';

if(isset($_POST['submit'])){
    if( empty($_POST['name']) || empty($_POST['cases'])
        || empty($_POST['deaths']) || empty($_POST['recovered']) )
    {
        echo "Please fillout all required fields";
    }else{
        $name = $_POST['name'];
        $cases = $_POST['cases'];
        $deaths = $_POST['deaths'];
        $recovered = $_POST['recovered'];
        $sql = "INSERT INTO places(name,cases,deaths,recovered) VALUES('$name','$cases','$deaths','$recovered')";

        if( $db->query($sql) === TRUE){
            header('Location: /CovidTracker/add-place.php');
        }else{
            echo "<div class='alert alert-danger'>Error: There was an error while adding new place</div>";
        }
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
								<a href="index.php" class="logo">
									<span class="symbol"><img src="/CovidTracker/images/logo.png" alt="" /></span><span class="title">Covid Tracker</span>
								</a>

						</div>
					</header>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Create Place</h1>
							
                            <section>
                                <form action="create.php" method="POST">

                                <div class="fields">
                                    
                                        <div class="field">
                                            <input type="text" name="name" id="name" required="required" placeholder="Name" />
                                        </div>
                                        <div class="field">
                                            <input type="text" name="cases" id="email" required="required" placeholder="Cases" />
                                        </div>
                                        <div class="field">
                                            <input type="text" name="deaths" id="deaths" required="required" placeholder="Deaths" />
                                        </div>
                                        <div class="field">
                                            <input type="text" name="recovered" id="recovered" required="required" placeholder="Recovered" />
                                        </div>
                                    
                                </div>
                                    <ul class="actions">
                                        <li><input type="submit" value="Add" name="submit" class="primary" /></li>
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

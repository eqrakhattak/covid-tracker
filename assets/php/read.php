<?php
    // Collecting data from query string
    $id=$_GET['id'];
    // Checking data it is a number or not
    if(!is_numeric($id)){
    echo "Data Error";
    exit;
    }
    // MySQL connection string
    require_once "config.php"; 
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
							<h1>Contacts</h1>
                        
                            <!-- Table -->
                            <section>
                                <div class="table-wrapper">
                                                                        
                                    <?php
                                        $count="SELECT * FROM places where id=?";

                                        if($stmt = $db->prepare($count)){
                                        $stmt->bind_param('i',$id);
                                        $stmt->execute();

                                        $result = $stmt->get_result();
                                        $row=$result->fetch_object();
                                    ?>
                                    <table>
                                        <tr>
                                            <td><b>Name</b></td>
                                            <td><?php echo $row->name; ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Cases</b></td>
                                            <td><?php echo$row->cases; ?></td>
                                        </tr>
                                        <tr >
                                            <td><b>Deaths</b></td>
                                            <td><?php echo $row->deaths; ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Recovered</b></td>
                                            <td><?php echo $row->recovered; ?></td>
                                        </tr>
                                    
                                    </table>
                                    <?php 
                                        }else{
                                        echo $db->error;
                                        }
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

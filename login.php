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
        <meta charset="UTF-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"> 
        <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/login.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/animate-login.css" />
    </head>
    <body>
        <div class="container">
            <section>				
                <div id="inner-container" >
                    <div id="wrapper">
                        <div id="login">
                            <form action="assets/php/login-config.php" method="POST" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="login-username">Email </label>
                                    <input id="login-username" name="email" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="login-password">Password </label>
                                    <input id="login-password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p>
                                    <input type="checkbox" name="isadmin" id="isadmin" value="isadmin" checked/> 
									<label for="isadmin">Are you an admin?</label>
                                </p>
                                <p>
                                    <input type="submit" value="Login" name="submit" class="button primary fit" />
                                    <small style="color: red;"><?php print $error; ?></small>
                                </p>
                                <p>
									Not a Member yet?
									<a href="register.php">Join us <?php $error = ""; ?></a>
								</p>
                            </form>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
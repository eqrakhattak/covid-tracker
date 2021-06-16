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
        <title>Login and Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"> 
        <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
        <!-- <link rel="stylesheet" type="text/css" href="assets/css/login.css" /> -->
		<!-- <link rel="stylesheet" type="text/css" href="assets/css/animate-login.css" /> -->
    </head>
    <body>
        <div class="container">
            <section>				

                    <!-- <a id="toregister"></a>
                    <a id="tologin"></a> -->
                    <div id="wrapper">
                        <div id="register" >
                            <form  action="assets/php/register-config.php" method="POST" autocomplete="on"> 
                                <h1> Sign up </h1>
                                <p> 
                                    <label for="signup-username">Enter Username</label>
                                    <input id="signup-username" name="username" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="signup-email">Enter Email</label>
                                    <input id="signup-email" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="signup-password">Enter Password </label>
                                    <input id="signup-password" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="signup-password-confirm">Confirm Password </label>
                                    <input id="signup-password-confirm" name="confirm-password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
									<input type="submit" value="Sign up" name="submit" class="button primary fit"/>
                                    <small style="color: red;"><?php print $error; ?></small> 
								</p>
                                <p>  
									Already a Member?
									<a href="login.php"> Signin <?php $error = ""; ?></a>
								</p>
                            </form>
                        </div>
                    </div>

            </section>
        </div>
    </body>
</html>
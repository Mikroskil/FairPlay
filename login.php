<?php
require_once __DIR__.'/user.php';
?>
<html>
<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="global.css">
</head>
<body>
	<?php include_once 'Header.php';?>
		<div class="container">
		<h3>Log In</h3>
           <div id="contain">
					<form class="login" action="" method="post">
									<?php
										if ( (isset($_POST["username"])) && (isset($_POST["password"])) )
										{
												prosesLogin($_POST["username"],$_POST["password"]);
										}	
										if ( ($_GET["salah"]) == "true")
											echo "Username atau Password salah!<br>";
									?>
									<label for="form-user">Username</label>
									<br>
									<input type="text" name="username" id="form-user" placeholder="Username">
									<br><br>
									<label for="form-pass">Password</label>
									<br>
									<input type="password" name="password" id="form-pass" placeholder="Password">
									<br><br>
									<input type="submit" name="login" value="Log in" > &nbsp; &nbsp; 
									<br />
									
								</form>
							
						</div>	
        		</div>
		<br class="break" />
	
</body>
</html>


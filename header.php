<?php
	session_start();
	include 'database1.php';
?>	


<!DOCTYPE html>
<html>
	<body>

<header>
	<nav>
		<ul>
			<li><a href="index.php">HOME</a></li>
				<?php
					if (isset($_SESSION['id'])){
							 
							echo	"<form action='includes/logout.inc.php.php'>
									<button type='submit'>LOGOUT</button>
								</form>	";
						}
						else { 
								echo("<form action='includes/login.inc.php.php' method='POST'>
								<input type='text' name='uid' placeholder='User id'><br>
								<input type='password' name='pwd' placeholder='Password'><br>
								<button type='submit'>LOGIN</button>
							</form>");
						}

				

				?>
			<li><a href="signup.php">SIGNUP</a></li>
		</ul>	

	</nav>

</header>
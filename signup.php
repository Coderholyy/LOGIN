<?php
	include 'header.php';
?>


<?php

	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if(strpos($url,'error=empty') !== false){
			echo "Fill out all the fields!";
	}
	elseif(strpos($url,'error=username') !== false){
			echo "Username already exists!";
	}
//	echo $url;
	if (isset($_SESSION['id'])){
		echo $_SESSION['id'];	
	}
	else { 
		echo "You are not logged in!";
	}
?>

<?php
	
	if (isset($_SESSION['id'])){
		echo "You are already logged in!";	
	}
	else { 
		echo "<form action='includes/signup.inc.php.php' method='POST'>
				<input type='text' name='firstname' placeholder='First name'><br>
				<input type='text' name='lastname' placeholder='Last name'><br>
				<input type='text' name='uid' placeholder='User id'><br>
				<input type='password' name='pwd' placeholder='Password'><br>
				<button type='submit'>SIGN UP</button>
			</form>";
	}
?>




	</body>

</html>
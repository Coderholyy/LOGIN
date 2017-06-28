<?php
session_start();
include '../database1.php';

$first = $_POST['firstname'];
$last = $_POST['lastname'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

if(empty($first)){
	header('Location: ../signup.php?error=empty');
	exit();
}
elseif(empty($last)){
	header('Location: ../signup.php?error=empty');
	exit();
}
elseif(empty($uid)){
	header('Location: ../signup.php?error=empty');
	exit();
}
elseif(empty($pwd)){
	header('Location: ../signup.php?error=empty');
	exit();
}
else{
	$sql = "SELECT uid FROM user WHERE uid='$uid'";
	$result = $conn->query($sql);
	$uidcheck = mysqli_num_rows($result);
	if($uidcheck > 0){
		header('Location: ../signup.php?error=username');
		exit();
	}
	else{
		$encrypted_password = password_hash($pwd, PASSWORD_DEFAULT);
		$sql = "INSERT INTO user(firstname, lastname, uid, pwd)
		 VALUES('$first','$last','$uid','$encrypted_password')";
		//$sql = "SELECT * FROM posts";
		$result = $conn->query($sql);
		//$row = $result->fetch_assoc();

		//echo $row['subject'];

		header('Location: ../index.php');
	}
	
}


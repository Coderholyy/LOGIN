<?php
session_start();
include '../database1.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid = '$uid'";
$result = mysqli_query($conn, $sql);
$row= mysqli_fetch_assoc($result);
$hash_pwd = $row['pwd'];
$hash = password_verify($pwd, $hash_pwd);

if($hash == 0){
	header("Location: ../index.php?error=empty");
	exit();
}
else{
			
		$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$hash_pwd'";
		//$sql = "SELECT * FROM posts";
		$result = mysqli_query($conn, $sql);
		//$row = $result->fetch_assoc();

		if(!$row= mysqli_fetch_assoc($result)){
			echo "Your username or password is incorect";
		} else{
			$_SESSION['id'] = $row['id'];
		}

		//echo $row['subject'];

		header('Location: ../index.php');	
}

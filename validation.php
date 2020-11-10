<?php
	$username = $_POST["uname"];
	$pass = $_POST["pass"];
	$file = fopen("Users.txt","r");
	$flag = false;
	while(!feof($file)){
		$line = fgets($file);
		$user = explode(" ",$line);
		if(trim($user[0]) == trim($username) && trim($user[1]) == trim($pass)){
			$flag = true;
			break;
		}
	}
	if($flag){
		echo "<h1>Welcome To Dashboard</h1>";
	}
	else{
		echo "<h1>Username and Password is not correct</h1>";
	}
	
	fclose($file);
?>
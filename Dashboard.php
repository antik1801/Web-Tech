<?php
	$username = $_POST["uname"];
	$pass = $_POST["pass"];
    $flag = false;
    $xml = simplexml_load_file("Users.xml");
    
    foreach($xml->user as $user){
        if(($user->username == "Nayma") && ($user->pass == "1234")){
            $flag = true;
            break;
        }
    }
	
	if($flag){
		echo "<h1>Welcome To Dashbord</h1>";
	}
	else{
		echo "<h1>Username and Password is not correct</h1>";
	}
?>
<?php
	$name = "";
	$err_name = "";
	$user_name = "";
	$err_user_name = "";
	$password = "";
	$err_password = "";
	$confirm_password = "";
	$err_confirm_password = "";
	$email = "";
	$err_email = "";
	$phone_no = "";
	$err_phone = "";
    $address_city = "";
    $err_address = "";
	$gender ="";
	$err_gender ="";
	$sources = "";
	$err_sources = "";
	
	if(isset($_POST["register"]))
	{
		// name validation
		if(empty($_POST["name"]))
		{
			$err_name = "*required name";
		}
		else{ $name = htmlspecialchars($_POST["name"]);}
		
		// username validation
		if(empty($_POST["userName"]))
		{
			$err_user_name = "*required user name";
		}
		else if(strlen($_POST["userName"]) < 6)
		{
			$err_user_name = "*at least 6 char required";
		}
		else if(strpos($_POST["userName"]," "))
		{
			$err_user_name = "*no space is allowed";
		}
		else{ $user_name = htmlspecialchars($_POST["userName"]);}
		
		// password validation
		
		if(!empty($_POST["password"]))
		{
			if(strlen($_POST["password"]) >= 8)
			{
				if(!(strtolower($_POST["password"]) == $_POST["password"]) && (!(strtoupper($_POST["password"]) == $_POST["password"])))
				{
					$hasNumber = false;
					$num_arr = array("0","1","2","3","4","5","6","7","8","9");
					$pass =htmlspecialchars($_POST["password"]);
					for($i = 0; $i < strlen($pass); $i++)
					{
						for($j = 0; $j <10; $j++)
						{
							if($pass[$i]== $num_arr[$j])
							{
								//echo "yo<br>";
								$hasNumber = true;
								break;
							}
						}
					}
					if($hasNumber == true)
					{
						if(strpos($_POST["password"], "#") || strpos($_POST["password"], "?"))
						{
							$password = htmlspecialchars($_POST["password"]);
						}
						else{$err_password = "*atleast one special character # or ? is required";}
					}
					else{$err_password = "*atleast one digit is required";}
				}
				else{$err_password = "*upper and lower case character required";}
			}
			else{$err_password = "*minimum password length is 8";}
		}
		else{$err_password = "*password required";}

		if($_POST["password"] != htmlspecialchars($_POST["confirmPassword"]))
		{
			$err_confirm_password = "*password not matched";
		}
		
		// email validation
		
		if(empty($_POST["email"]))
		{
			$err_email = "*required email";
		}
		else if(strpos($_POST["email"],"@"))
		{
			$flag = false;
			$pos = strpos($_POST["email"],"@");
			$str = $_POST["email"];
			for($i = $pos; $i < strlen($str); $i++)
			{
				//echo $i ."<br>";
				//echo $pos ."<br>";
				if($str[$i] == "."){$flag = true;break;}
			}
			if($flag == true){$email = htmlspecialchars($_POST["email"]);}
			else{$err_email = "*invalid email pattern";}
		}
		
		
		// phone validate
		
		if(empty($_POST["number"]))
		{
			$err_phone = "*required number";
		}
		else if(!is_numeric($_POST["number"]))
		{
			$err_phone = "*required numeric charecter";
		}
		else{ $phone_no = htmlspecialchars($_POST["number"]);}
		
		// address validate
		
		if(empty($_POST["city"]))
		{
			$err_address = "*City Required";
		}
		else{ $address_city = htmlspecialchars($_POST["city"]);}
		
		
		// gender validate
		
		if(isset($_POST["gender"]))
		{
			$gender = $_POST["gender"];
		}
		else{$err_gender = "*gender required";}
		
		// sources validate
		
		if(isset($_POST["sources"]))
		{
			$sources = $_POST["sources"];
		}
		else{$err_sources = "*sources required";}
	}
	
?>	

<html>
	<head>
		<title>Registation</title>
	</head>
	<body>
		
		<hr>
		<form action="Login.php" method="post">
			<fieldset>
				<h1>Welcome to Registration</h1>
				<table>
					<tr>
						<td align="center">Full Name:</td>
						<td><input type="text" name="name" value="<?php echo $name; ?>"><?php echo $err_name; ?></td>
					</tr>
					<tr>
						<td align="center">Username:</td>
						<td><input type="text" name="userName" value="<?php echo $user_name; ?>"><?php echo $err_user_name; ?></td>
					</tr>
					<tr>
						<td align="center">Password:</td>
						<td><input type="password" name="password" value="<?php echo $password; ?>"><?php echo $err_password; ?></td>
					</tr>
					<tr>
						<td align="center">Confirm Password:</td>
						<td><input type="password" name="confirmPassword" value="<?php echo $password; ?>"><?php echo $err_confirm_password; ?></td>
					</tr>

                    <tr>
						<td align="center">Gender:</td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female   <?php echo " ".$err_gender; ?>
						</td>
					</tr>
					<tr>
						<td align="center">Email:</td>
						<td><input type="text" name="email" value="<?php echo $email; ?>"><?php echo $err_email; ?></td>
					</tr>
					<tr>
						<td align="center">Contact No:</td>
						<td>
							
                         <input type="text" placeholder="Number" size="11" name="number" value="<?php echo $phone_no ?>"><?php echo $err_phone; ?>
						</td>
					</tr>
                    <tr>
                     <td align="center">City:</td>
                     <td>
                     <input type="text" list="City">
                      <br>
                     <select name="day" style="width: 180px">
                      <option>Chittagong</option>
                      <option>Dhaka</option>
                      <option>Rajshahi</option>
                     <option>Sylhet</option>
                      </select> 
                      </td>
                     </tr>
					<tr>
						<td colspan="4" align="center"><input type="submit" name="register" value="OK"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
	
</html>
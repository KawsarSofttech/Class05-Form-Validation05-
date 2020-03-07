<!DOCTYPE html>
<html>
<head>
	<title>forms</title>
</head>
<body>
	<!-- form[method(get&post) && action] -->
	<?php

		$var = "Manir";

		if(isset($_POST["submit"])){
			if	(!empty($_POST["username"]) && !empty($_POST["password"])){
					$pass = $_POST["password"];
					if(strlen($pass) > 5){
						echo "Signed Up";
						header("location: profile.php");
					}else{
						echo "Password should be of minimum 6 characters";
					}	
				
			}else{
				echo "Username or Password can't be blank";
			}
				
		}
			
		
	?>
	<form method="POST" action="">
		<input type="text" name="username" placeholder="<?php echo $var; ?>"><br>
		<input type="password" name ="password" placeholder="Password"><br>
		<input type="submit" name="submit" value="Sign Up">
	</form>
		


</body>
</html>
<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>

	<div class= "hero">
		<div class="form-box">
			<div class= "button-box">
				<div id= "btn"></div>
				<button type="button" class="toggle-btn"> Login </button>
				<button type="button" class="toggle-btn"> Sign Up </button>
			</div>
			<form class="input-group" method="post">

				<input class= "input-field" placeholder="User Id" id="text" type="text" name="user_name" required><br><br>
				<input class= "input-field" placeholder="Enter password" id="text" type="password" name="password"><br><br>

				<button type="submit" class="submit-btn">Login</button><br><br>

				<a href="signup.php">Click to Signup</a><br><br>
			</form>
	</div>
</body>
</html>

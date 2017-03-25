<?php
	require_once("phpscripts/init.php");
	//confirm_logged_in();
	
	if(isset($_POST['submit'])) {
		//echo "works";
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$level = $_POST['lvllist'];
		if(empty($level)) {
			$message ="Please select a user level.";

		}else {
			//echo "all good...";
			$results = createUser($fname, $lname, $username, $password, $level);
			$message = $results;
		}

	}


?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Create New User</title>
</head>
<body>
	<h1>Create User</h1>
	<?php if(!empty($message)){echo $message;}?>
	<form action="admin_createuser.php" method="post">
		<label>First Name:</label>
		<input type="text" name="fname" value="<?php if(!empty($fname)){echo $fname;}?>">
		<label>Last Name:</label>
		<input type="text" name="lname" value="<?php if(!empty($lname)){echo $lname;}?>">
		<label>Username:</label>
		<input type="text" name="username" value="<?php if(!empty($username)){echo $username;}?>">
		<label>Password:</label>
		<input type="text" name="password" value="<?php if(!empty($password)){echo $password;}?>">
		<select name="lvllist">
			<option value="">Please select a user level...</option>
			<option value="2">Web Admin</option>
			<option value="1">Web Master</option>
		</select><br><br>
		<input type="submit" name="submit" value="Create User">
	</form>
</body>
</html>
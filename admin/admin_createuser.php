<?php
	$pageTitle = "Create User";

	require_once("phpscripts/init.php");
	confirm_logged_in();

	function createUser($fname, $lname, $username, $password, $level) {
		require_once("phpscripts/connect.php");
		$ip = 0;
		$userstring = "INSERT INTO tbl_user VALUES(NULL,'{$fname}','{$lname}','{$username}','{$password}','{$level}',{$ip})";
		//echo $userstring;
		$userquery = mysqli_query($link, $userstring);
		if ($userquery) {
			redirect_to("index.php");
		}else {
			$message = "Something went wrong their is an error";
			return $message;
		}





		//mysqli_close($link);
	}

	
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
	include "includes/admin_header.php";
	include "includes/admin_top_nav.php";
	include "includes/admin_side_nav.php";

?>

<!-- <!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Create New User</title>
</head>
<body> -->
	<section>
	<div class="row">
	<div class="medium-10 large-10 columns">
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
		<input type="password" name="password" value="<?php if(!empty($password)){echo $password;}?>">
		<select name="lvllist">
			<option value="">Please select a user level...</option>
			<option value="2">Web Admin</option>
			<option value="1">Web Master</option>
		</select>
		<input type="submit" name="submit" value="Create User">
	</form>
	</div>
	</div>
	</section>
	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/foundation/foundation.topbar.js"></script>
	<script src="js/start.js"></script>
</body>
</html>
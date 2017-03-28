<?php
	$pageTitle = "Create User";

	require_once("phpscripts/init.php");
	confirm_logged_in();

	function createUser($user_fname, $user_lname, $user_name, $user_pass, $user_role) {
		require_once("phpscripts/connect.php");
		$user_id = "";
		$user_ip = 0;
		$userstring = "INSERT INTO tbl_user VALUES('{$user_id}','{$user_fname}','{$user_lname}','{$user_name}','{$user_pass}','{$user_role}',{$user_ip})";
		echo $userstring;
		$userquery = mysqli_query($link, $userstring);
		if ($userquery) {
			redirect_to("index.php");
		}else {
			$message = "Something went wrong their is an error";
			return $message;
		}





		mysqli_close($link);
	}
	

	
	if(isset($_POST['submit'])) {
		//echo "works";
		$user_fname = trim($_POST['user_fname']);
		$user_lname = trim($_POST['user_lname']);
		$user_name = trim($_POST['user_name']);
		$user_pass = trim($_POST['user_pass']);
		$user_email = trim($_POST['user_email']);
	    $user_role = $_POST['lvllist'];
		if(empty($user_role)) {
			$message ="Please select a user role.";

		}else {
			//echo "all good...";
			$results = createUser($user_fname, $user_lname, $user_name, $user_pass, $user_email, $user_role);
			$message = $results;
		}

	}
	include "includes/admin_header.php";
	include "includes/admin_top_nav.php";
	include "includes/admin_side_nav.php";

?>

	<section>
	<div class="row">
	<div class="medium-10 large-10 columns">
	<h1>Create User</h1>
	<?php if(!empty($message)){echo $message;}?>
	<form action="admin_createuser.php" method="post">
		<label>First Name:</label>
		<input type="text" name="user_fname" value="<?php if(!empty($user_fname)){echo $user_fname;}?>">
		<label>Last Name:</label>
		<input type="text" name="user_lname" value="<?php if(!empty($user_lname)){echo $user_lname;}?>">
		<label>Username:</label>
		<input type="text" name="user_name" value="<?php if(!empty($user_name)){echo $user_name;}?>">
		<label>Password:</label>
		<input type="password" name="user_pass" value="<?php if(!empty($user_pass)){echo $user_pass;}?>">
		<label>Email:</label>
		<input type="email" name="user_email" value="<?php if(!empty($user_email)){echo $user_email;}?>">
		<select name="lvllist">
			<option value="">Please select a user Role...</option>
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
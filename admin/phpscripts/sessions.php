<?php
	session_start();

	function confirm_logged_in() {
		if(!isset($_SESSION['users_creds'])){
			redirect_to("login.php");

		}
	}

	function logged_out(){
		session_destroy();
		redirect_to("../login.php");
	}

?>
<?php
session_start();
if(isset($_GET['id']) && $_GET['id'] != null) {
	if(array_key_exists($_GET['id'], $_SESSION['users'])) {
		unset($_SESSION['users'][$_GET['id']]);
		header('location:listuser.php');
	} else {
		echo 'user not found';
	}
}
<?php
session_start();
if (isset($_POST['save'])) {
	$user = $_POST;
	unset($user['save']);
	if (isset($_GET['id'])) {
		$_SESSION['users'][$_GET['id']] = $user;
	} else {
		if (!isset($_SESSION['users']) || $_SESSION['users'] == null) {
			$_SESSION['users'] = [];
		}
		array_push($_SESSION['users'], $user);
	}
	header('location:listuser.php');
}
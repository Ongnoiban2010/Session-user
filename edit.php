<style>
	* {
		margin:0;
		padding: 0;
	}
	.content {
		width: 500px;
		border: 1px solid black;
		margin: auto;
		padding: 10px;
	}
	.content label {
		width: 100px;
		float: left;
		/*	margin-bottom: 10px;*/
	}
	.content input[type=text] {
		margin: 5px;
	}
	input[type=submit] {
		margin-top: 10px;
		width: 100px;
		border-radius: 5px;
		height: 30px;
		/*line-height: 30px;*/
		margin-left: 5px;
	}
	input[type=file] {
		margin-left: 5px;
	}
</style>
<?php
session_start();
if(isset($_GET['id'])) {
	$user = $_SESSION['users'][$_GET['id']];
}
require 'userform.php';


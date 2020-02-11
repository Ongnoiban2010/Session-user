<div class="content">
	<?php 
		$actionUrl = isset($_GET['id']) ? 'userprocess.php?id='.$_GET['id'] : 'userprocess.php';
	?>
		<form action="<?= $actionUrl?>" method="post" accept-charset="utf-8">
		<label>Fullname</label>
		<input type="text" name="fullname" value="<?= isset($user['fullname']) ? $user['fullname'] : null;?>">
		<br>
		<label>Email</label>
		<input type="text" name="email" value="<?= isset($user['email']) ? $user['email'] : null;?>">
		<br>
		<label>Phone</label>
		<input type="text" name="phone" value="<?= isset($user['phone']) ? $user['phone'] : null;?>">
		<br>
		<label>Avatar</label>
		<input type="file" name="avatar">
		<br>
		<label>&nbsp;</label>
		<input type="submit" name="save" value="Save">
	</form>
	</div>
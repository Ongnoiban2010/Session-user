<h3>List User</h3>
<?php
session_start();
if (isset($_SESSION['users']) && $_SESSION['users'] != null) {
	echo '<table width="800" border="1" style="border-collapse: collapse;">';
	echo '<tr><th>Fullname</th><th>Email</th><th>Phone</th><th>Avatar</th><th>Action</th></tr>';

	foreach ($_SESSION['users'] as $key => $value) {
		echo '<tr>';
		echo '<td>'.$value['fullname'].'</td>';
		echo '<td>'.$value['email'].'</td>';
		echo '<td>'.$value['phone'].'</td>';
		echo '<td>'.$value['avatar'].'</td>';
		echo '<td><a href="edit.php?id='.$key.'">Edit</a> | <a href="delete.php?id='.$key.'">Delete</a></td>';
		echo '</tr>';
	}
	echo '</table>';
}
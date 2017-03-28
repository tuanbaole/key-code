<?php
session_start();
include('function.php');
if (isset($_POST['username']) AND isset($_POST['password']) ) {
	if ($_POST['username'] === 'itadmin' AND $_POST['password'] === 'itcode') {
		$_SESSION['login_user'] = 'itadmin';
		redirect('index.php');
	} else {
		redirect('index.php');
	}
} else {
	redirect('index.php');
}
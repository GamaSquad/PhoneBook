<?php

$users = [
	[
		'username' => 'test',
		'password' => 'test'
	],
	[
		'username' => 'admin',
		'password' => 'pass'
	],
];

function login($username, $password) {
	
	global $users;
	
	foreach ( $users as $user ) {
		if ( $user['password'] == $password && $user['username'] == $username ) {
			$_SESSION['user'] = $username;
			return true;
		}
	}
	
	return false;
	
}

function logout() {
	unset($_SESSION['user']);
}

function checkLogin() {
	if ( !isset($_SESSION['user']) ) {
		header('Location: ../login.php');
	}
}

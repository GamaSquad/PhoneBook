<?php
session_start();
require_once 'credentials.php';
$message = '';
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	
	//Check if we have the submited username with the submited password
	foreach ( $users as $user ) {
		if ( $user['username'] == $_POST['username'] && $user['password'] == $_POST['password'] ) {
			$_SESSION['username'] = $user['username'];
		}
	}	
	if ( !array_key_exists('username', $_SESSION) ) {
		$message = 'Invalid username or password !';
	} else {
		header('Location: dashboard.html');
		exit();
	}

}
?>
<html>
    <head>
        <title>Admin Panel</title>
        <link href="css/login.css" rel="stylesheet">
    </head>
    <body>
        <div id="login">
            <h1>Admin Panel</h1>                   
            <form action="" id="loginform" method="POST">
                <p>Username: <input type="text" name="username" size="30" value=""/>
                </p>
                <p>Password: <input type="password" name="password" size="30" value=""/>
                </p>
                <input type="submit" id="loginbtn" value="Log In"/>
            </form>
            <p><?= $message ?></p>
    </div>
</body>
</html>

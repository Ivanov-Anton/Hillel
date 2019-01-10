<?php

session_start();

if (isset($_POST['email'])) {
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);

	$cred = [
		'email' => 'admin@email.com',
		'password' => '123123',
	];

	if ($email == $cred['email'] && $password == $cred['password']) {

		$_SESSION['email'] = $email;

		header('Location: admin.php');
		die;
	}
}

if (isset($_SESSION['error'])) {
	$message = $_SESSION['error'];
	unset($_SESSION['error']);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php if (isset($message)) : ?>
		<div><?=$message?></div>
	<?php endif ?>
	<form method="POST">
		<div>
			<label for="email-field">E-mail</label>
			<input type="email" name="email" id="email-field">
		</div>
		<div>
			<label for="password-field">Password</label>
			<input type="password" name="password" id="password-field">
		</div>
		<button type="submit">Login</button>
	</form>
</body>
</html>
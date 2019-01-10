<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
	<h1>Sign Up</h1>
	<form action="account.php">
		<div>
			<select name="gender">
				<option value="Mr.">Mr.</option>
				<option value="Mrs.">Mrs.</option>
			</select>
		</div>
		<div>
			<label for="first-name-field">First name:</label>
			<input type="text" name="firstName[]" id="first-name-field" value="John">
		</div>
		<div>
			<label for="last-name-field">Last name:</label>
			<input type="text" name="lastName" id="last-name-field">
		</div>
		<div>
			<label for="email-field">Email:</label>
			<input type="text" name="email" id="email-field">
		</div>
		<div>
			<button type="submit">Sign Up</button>
		</div>
	</form>
</body>
</html>
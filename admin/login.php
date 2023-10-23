<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}
		label {
			margin-top: 20px;
			display: flex;
			flex-direction: column;
			align-items: center;
			font-size: 18px;
			font-weight: bold;
			text-align: center;
		}
		input[type="text"], input[type="password"] {
			padding: 10px;
			margin-top: 5px;
			font-size: 18px;
			border: none;
			border-radius: 5px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
		}
		button {
			margin-top: 20px;
			padding: 10px 20px;
			font-size: 18px;
			font-weight: bold;
			color: #fff;
			background-color: #008CBA;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
		}
		button:hover {
			background-color: #005F6B;
		}
	</style>
</head>
<body>
	<form method="POST" action="login_action.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<button type="submit">Login</button>
	</form>
</body>
</html>

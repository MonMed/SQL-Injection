<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style>
	.container {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		height: 100vh;
	}
	
	form {
		display: flex;
		flex-direction: column;
		align-items: center;
		padding: 20px;
		border: 2px solid black;
		border-radius: 10px;
	}
	
	input[type="text"], input[type="password"] {
		padding: 10px;
		font-size: 20px;
		border-radius: 5px;
		border: none;
		margin-bottom: 10px;
	}
	
	button {
		padding: 10px;
		background-color: #4CAF50;
		color: white;
		font-size: 20px;
		border-radius: 5px;
		border: none;
		cursor: pointer;
	}
	
	h2 {
		margin-bottom: 20px;
	}
	
	p.error {
		color: red;
		margin-top: 10px;
	}
	</style>
</head>
<body>
	<div class="container">
		<form action="s_login.php" method="post" id="login-form" autocomplete="off">
			<h2>Login Form</h2>
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
			<button type="submit" name="login">Login</button>
		</form>
	</div>
</body>
</html>
<html>
<head>
	<title>Login</title>	
</head>
<body>
	<?php
			include('head.php');
		?>

	<h1>Login</h1>
	<form action="login.php" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Log In"></td>
			</tr>
			<tr>
			<td></td>
                <td><input name="remember" type="checkbox" value="Remember Me">Remember Me</td>	
			</tr>
		</table>
	</form>
</body>
</html>
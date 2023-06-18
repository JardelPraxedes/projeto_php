<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projeto A3 - Programação e Modelagem Manhã</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-image: url(https://static.vecteezy.com/system/resources/previews/006/316/482/original/alien-planet-game-background-free-vector.jpg);
			background-size: auto 1100px;
			background-position: center;
			background-repeat: no-repeat;
			color: white;
			text-shadow: 2px 2px black;
		}

		center {
			margin-top: 100px;
		}

		h1 {
			color: white;
			text-shadow: 2px 2px black;
			font-size: 24px;
		}

		form {
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
		}

		form input[type="text"],
		form input[type="password"] {
			width: 200px;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 10px;
		}

		form input[type="submit"] {
			padding: 10px 20px;
			background-color: #333;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		form input[type="submit"]:hover {
			background-color: white;
		}
	</style>
</head>
<body>
	<center>
		<h1>Login</h1>
		<form id="form-login" action="logado.php" method="POST">
			Login: <input type="text" name="login" required><br>
			Senha: <input type="password" name="senha" required><br><br>
			<input type="submit" name="entrar" value="Entrar">
		</form>
	</center>
</body>
</html>

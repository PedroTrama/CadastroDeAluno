<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="style.css">
	<title>Cadastro de Alunos</title>
</head>

<body>
	<div id="bloco">
		<div id="main">
			<div id="header">
				<h1>Cadastrar Aluno</h1>
			</div>

			<div id="menu">
				<p><strong>Navegação</strong></p>
				<p><a href="./cadastrar.php">Cadastrar</a></p>
				<p><a href="./consultar.php">Consultar</a></p>
			</div>

			<div id="cadastro">
				<?php
				$form = "<form action='cadastrar.php' method='POST'>
								<p>RA: <input type='text' name='ra' /> </p>
								<p>Nome: <input type='text' name='nome' /> </p>
								<p>Sexo: <input type='text' name='sexo' /> </p>
								<p>Idade: <input type='text' name='idade' /> </p>
								<p>Endereço: <input type='text' name='endereco' /> </p>
								<p>Telefone: <input type='text' name='telefone' /> </p>
								<p>Email: <input type='text' name='email' /> </p>
								<input type='submit' value='Cadastrar' id='botao'/>
							</ form>";

				if (isset($_POST["ra"])) {
					try {
						$conn = new PDO("mysql:host=localhost;dbname=myDB", "root", "");
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$sql = "INSERT INTO cadastro VALUES (
					" . $_POST["ra"] . ", '"
							. $_POST["nome"] . "', '"
							. $_POST["sexo"] . "', "
							. $_POST["idade"] . ", '"
							. $_POST["endereco"] . "', '"
							. $_POST["telefone"] . "', '"
							. $_POST["email"] . "')";

						$conn->exec($sql);

						echo $form;
					} catch (PDOException $e) {
						echo "ERRO: " . $e->getMessage();
					}
				} else {
					echo $form;
				}
				?>
			</div>
		</div>
	</div>

</body>

</html>
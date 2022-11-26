<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="style.css">
	<title>Cadastro de Alunos</title>
</head>

<body>
	<div id="bloco2">
		<div id="main">
			<div id="header">
				<h1>Consultar Alunos</h1>
			</div>

			<div id="menu">
				<p><strong>Navegação</strong></p>
				<p><a href="./cadastrar.php">Cadastrar</a></p>
				<p><a href="./consultar.php">Consultar</a></p>
			</div>

			<div id="cadastro">
				<?php
				try {
					$conn = new PDO("mysql:host=localhost;dbname=myDB", "root", "");
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					$sql = "SELECT * FROM cadastro";
					$stmt = $conn->query($sql);
					
					

					while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo "<table border='1'><tr>";
						echo "<tr><th>RA</th><th>Nome</th><th>Sexo</th><th>Idade</th><th>Endereço</th><th>Telefone</th><th>Email</th></tr>";
						echo "<td>" . $row["ra"] . "</p></td>";
						echo "<td>" . $row["nome"] . "</p></td>";
						echo "<td>" . $row["sexo"] . "</p></td>";
						echo "<td>" . $row["idade"] . "</p></td>";
						echo "<td>" . $row["endereco"] . "</p></td>";
						echo "<td>" . $row["telefone"] . "</p></td>";
						echo "<td>" . $row["email"] . "</p></td>";
						echo "</tr></table>";
						echo "<br>";
					}
				} catch (PDOException $e) {
					echo "ERRO: " . $e->getMessage();
				}
				?>
			</div>
		</div>
	</div>

</body>

</html>
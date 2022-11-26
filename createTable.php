<html>
<meta charset="UTF-8" />
	<link rel="stylesheet" href="style.css">
	<title>Cadastro de Alunos</title>
<body>

	<p> Criando Tabela </p>
	<?php
	try {
		$conn = new PDO("mysql:host=localhost;dbname=myDB", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "CREATE TABLE cadastro (
					ra int NOT NULL,
					PRIMARY KEY(ra),
					nome varchar(50) NOT NULL,
					sexo varchar(10) NOT NULL,
					idade int NOT NULL,
					endereco varchar(50) NOT NULL,
					telefone varchar(20) NOT NULL,
					email varchar(30) NOT NULL)";

		$conn->exec($sql);
		echo "<p>Tabela criada</p>";

		$conn = null;
	} catch (PDOException $e) {
		echo "ERRO: " . $e->getMessage();
	}
	?>


</body>

</html>
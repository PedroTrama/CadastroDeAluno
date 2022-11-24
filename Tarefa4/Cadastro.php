<!DOCTYPE html >
<html lang="pt">
<head>
	<meta charset="UTF-8" />
	<title>Cadastro de Pessoa</title>
</head>
<body>
      
	<h1>Cadastro de Pessoa</h1>
    <?php	
		echo "<p>Nome: " . $_POST["nome"] . "</p>";
		echo "<p>RA: " . $_POST["ra"] . "</p>";
		echo "<p>Sexo: " . $_POST["sexo"] . "</p>";		
		echo "<p>Idade: " . $_POST["idade"] . "</p>";				
		echo "<p>Celular: " . $_POST["celular"] . "</p>";						
		echo "<p>Email: " . $_POST["email"] . "</p>";
	?>

      
</body>
</html>

<!DOCTYPE html >
<html lang="pt">
<head>
	<meta charset="UTF-8" />
	<title>Cadastro de Pessoa</title>
</head>
<body>
      
	<h1>Cadastro de Pessoa</h1>
    <?php	
		echo "<p>Nome: " . $_POST["name"] . "</p>";
		echo "<p>CPF: " . $_POST["cpf"] . "</p>";
		echo "<p>RG: " . $_POST["rg"] . "</p>";		
		echo "<p>Idade: " . $_POST["age"] . "</p>";				
		echo "<p>Sexo: " . $_POST["sexo"] . "</p>";				
		echo "<p>Estado Civil: " . $_POST["estadoCivil"] . "</p>";				
		echo "<p>Telefone Fixo: " . $_POST["telFixo"] . "</p>";				
		echo "<p>Telefone Celular: " . $_POST["telCelular"] . "</p>";						
		echo "<p>Endereço: " . $_POST["endereco"] . "</p>";
	?>

      
</body>
</html>

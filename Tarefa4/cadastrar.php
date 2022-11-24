<!DOCTYPE html >
<html lang="pt">
<head>
	<meta charset="UTF-8" />
	<title>Cadastro de Alunos</title>
</head>
<body>
      
    <div id="container">
    	<div id="header">
    		<h1>Cadastro de Produtos</h1>
    	</div>
    	
    	<div id="menu" style="width:100px;float:left;">
    		<?php require("./menu.php"); ?>
    	</div>
    
    	<div id="content" style="float:left;">
    		<?php
    			$form = "<form action="ex2.php" method="POST">
				<p>Nome: <input type="text" name="nome" /> </p>
				<p>RA: <input type="text" name="ra" /> </p>
				<p>Sexo:</p>
				<p><input type="radio" name="sexo" value="Masculino" /> Masculino </p>
				<p><input type="radio" name="sexo" value="Feminino" /> Feminino </p>
				<p>Idade: <input type="text" name="idade" /> </p>
				<p>Endereço: <input type="text" name="endereco" /> </p>
				<p>Celular: <input type="text" name="celular" /> </p>
				<p>Email: <input type="text" name="email" /> </p>
				<input type="submit" value="Cadastrar" />
			</form>";

				if (isset($_POST["cod"]))
				{
					try
					{
						$conn = new PDO("mysql:host=localhost;dbname=myDB", "root", "");
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							
						$sql = "INSERT INTO exercicio3 VALUES (" . $_POST["cod"] . ",'" . 
															$_POST["nome"] . "', '" . 
															$_POST["desc"] . "', " .
															$_POST["preco"] . ", " . 
															$_POST["peso"] . ")";

						$conn->exec($sql);

						echo $form;
					}
					catch(PDOException $e)
					{
						echo "Ocorreu um erro: " . $e->getMessage();
					}	
				}
				else
				{		
					echo $form;
				}
			?>			
    	</div>
    </div>  
</body>
</html>

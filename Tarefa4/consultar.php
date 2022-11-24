<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8" />
	<title>Cadastro de Produtos</title>
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
    		<h2>Produtos Cadastrados</h2>
    		<?php
				try
				{
					$conn = new PDO("mysql:host=localhost;dbname=myDB", "root", "");
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					$sql = "SELECT * FROM exercicio3";
					$stmt = $conn->query($sql); // Returns an object from class PDOStatement
				
					while($row = $stmt->fetch(PDO::FETCH_ASSOC))
					{
                    	echo "<p>Nome: " . $row["Nome"] . "</p>";
                        echo "<p>RA: " . $row["RA"] . "</p>";
                        echo "<p>Sexo: " . $row["Sexo"] . "</p>";
                        echo "<p>Idade: " . $row["Idade"] . "</p>";                            
						echo "<p>Endereço: " . $row["Endereço"] . "</p>";      
						echo "<p>Celular: " . $row["Celular"] . "</p>";                            
						echo "<p>Email: " . $row["Email"] . "</p>";  
                        echo "<br />";
                    }
				}
				catch(PDOException $e)
				{
					echo "Ocorreu um erro: " . $e->getMessage();
				}
			?>
    	</div>
    </div>  
</body>
</html>

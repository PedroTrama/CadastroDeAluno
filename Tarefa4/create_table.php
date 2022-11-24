<html>
   <body>
      
      <p> Criando Tabela </p>
      <?php
                echo "<p>Criando tabela no banco de dados... </p>";
				try {
					$conn = new PDO("mysql:host=localhost;dbname=myDB", "root", "");
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
					$sql = "CREATE TABLE exercicio3 (
     						codigo_produto smallint NOT NULL,
							PRIMARY KEY(codigo_produto),
     						nome_produto varchar(80) NOT NULL,
     						descricao_produto text,
     						preco float NOT NULL,
		    				peso float)";

					$conn->exec($sql);
					echo "<p>Tabela criada com sucesso</p>";

					$conn = null;
				}
				catch(PDOException $e)
				{
					echo "Ocorreu um erro: " . $e->getMessage();
				}
	?>

      
   </body>
</html>

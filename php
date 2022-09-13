INDEX.PHP
<html>
				<head>
								<meta	charset="UTF-8">
								<title></title>
				</head>
				<body>
								<h3>Formulário</h3>
								<form	action="recebe.php.php"	method="post">
												Nome:<input	type="text"	name="nome"	placeholder="Informe	o	seu	
nome"><br><br>
												Sexo:<input	type="text"	name="sexo"	placeholder="Informe	o	seu	
sexo"><br><br>
												Escolaridade:<input	type="text"	name="escolaridade"	
placeholder="Escolaridade"><br><br>
												Data	de	Nascimento:<input	type="date"	name="data"><br><br>
												<input	type="submit"	name="submit"	value="Enviar">
												<input	type="reset"	name="cancelar"	value="Cancelar">
												
								</form>
			 </body>
</html>
RECEBE.PHP.PHP
<?php
			$nome=$_POST["nome"];
			$sexo=$_POST["sexo"];
			$escolaridade=$_POST["escolaridade"];
			$data_nascimento=$_POST["data"];
			
			echo'Seu	nome:'.$nome.'<br>';
			echo'Seu	sexo:'.$sexo.'<br>';
			echo'Escolaridade:'.$escolaridade.'<br>';
			echo'Data	de	nascimento:'.$data_nascimento.'<br>';
?>

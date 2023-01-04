<?php
	
try{
	
	
	/*
	define('MYSQL_HOST', 'localhost');
	define('MYSQL_USER', 'root');
	define('MYSQL_PASSWORD', '');
	define('MYSQL_DB_NAME', 'tables_in_livro')
	*/
	
	$conn = new PDO('mysql:host=localhost' . ';dbname=tables_in_livro', 'root', '');//conexão com o banco de dados
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//tratamento de erros
	
	$result = $conn->query("SELECT codigo, nome FROM famosos");
	if($result)
	{
		/* foreach($result as $row) */
		while($row = $result->fetch(PDO::FETCH_OBJ))
		{
			print $row->codigo . '-' . $row->nome . '<br>';
		}
		
	}
/* 	var_dump($result);	
 */	$conn = null;
}catch(PDOException $e){
	print 'Erro: ' . $e->getMessage();
	
}
 

?>
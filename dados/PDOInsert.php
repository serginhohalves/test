<?php

try{
	
	
	
	define('MYSQL_HOST', 'localhost');
	define('MYSQL_USER', 'root');
	define('MYSQL_PASSWORD', '');
	define('MYSQL_DB_NAME', 'tables_in_livro');
	
	$conn = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);//conexão com o banco de dados
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//tratamento de erros
	
	$conn->exec("INSERT INTO famosos(codigo, nome) VALUES(9,'Gilberto Freire')");
	$conn = null;
}catch(PDOException $e){
	print 'Erro: ' . $e->getMessage();
	
}

?>
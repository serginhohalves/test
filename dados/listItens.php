<?php
$conn = mysqli_connect('localhost', 'root', '', 'tables_in_livro');
$query = 'SELECT codigo, nome FROM famosos';

$result = mysqli_query($conn, $query);
if($result)
{
	while($row = mysqli_fetch_assoc($result))
	{
		echo $row['codigo'] . '-' . $row['nome'] . '<br>'; 
	}
}


mysqli_close($conn);
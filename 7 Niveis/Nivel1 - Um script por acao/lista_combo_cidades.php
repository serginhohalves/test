<?php

function lista_combo_cidades($id_cidade)
{
	$conn = mysqli_connect("localhost", "root", "", "test" );
	$result = mysqli_query($conn, "SELECT id, nome FROM cidade");
	
	$output = '';
	if($result)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$id = $row['id'];
			$nome = $row['nome'];
			$check = ($id==$id_cidade) ? "selected=1" : "";
			$output .= "<option {$check} value='{$id}'>$nome</option>";
			
		}
	}

	mysqli_close($conn);
	return $output;
}		
?>
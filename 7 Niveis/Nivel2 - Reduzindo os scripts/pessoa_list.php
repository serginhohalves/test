<html>
	<head>
	<meta charset ="utf-8">
	<title> Listagem  de Pessoas</title>
	<link href='css/list.css' rel='stylesheet' type='text/css'  media='screen'>
	<link href='css/fontawesome/css/all.min.css' rel='stylesheet' type='text/css' media='screen'>
	
	<body>	
		<table border = 1>
			<thead>
				<tr>
					<td></td>
					<td></td>
					<td>id</td>
					<td>Nome</td>
					<td>Endereço</td>
					<td>Bairro</td>
					<td>Telefone</td>
					<td>Email</td>
				</tr>
			</thead>
			<tbody>
				<?php
					
					$conn = mysqli_connect("localhost", "root", "", "test" );					
					if(!empty($_GET['action']) and ($_GET['action'] == 'delete'))
						{
							$id = (int) $_GET['id'];
							mysqli_query($conn, "DELETE FROM pessoa WHERE id='{$id}'");
						}							
					$result = mysqli_query($conn, "SELECT * from pessoa ORDER BY id");

					while($row = mysqli_fetch_assoc($result))
					{ 
						$id = $row["id"];
						$nome = $row["nome"];
						$endereco = $row["endereco"];
						$bairro = $row["bairro"];
						$telefone = $row["telefone"];
						$email = $row["email"];
						$id_cidade = $row["id_cidade"];
						
						print "<tr>";
						print "<td><a href='pessoa_form.php?action=edit&id={$id}'>
							<i class='fa-solid fa-pen-to-square'></i></a></td>";
						print "<td><a href='pessoa_list.php?action=delete&id={$id}'>
							<i class='fa-regular fa-trash-can' style='color:red'></i></a></td>";
						print "<td>{$id}</td>";
						print "<td>{$nome}</td>";
						print "<td>{$endereco}</td>";
						print "<td>{$bairro}</td>";
						print "<td>{$telefone}</td>";
						print "<td>{$email}</td>";
						print "</tr>";
					}
				?>
			</tbody>
		</table>			
		
		<button onclick="window.location='pessoa_form.php'" style='background-color:#D3FFCE'>
			<i class="fa-solid fa-plus"></i> Inserir
		</button>
		
	</body>	
</html>
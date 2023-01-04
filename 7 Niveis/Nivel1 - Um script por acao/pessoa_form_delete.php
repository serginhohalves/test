<?php


$dados = $_GET;


if ($dados['id']) {
    $conn = mysqli_connect("localhost", "root", "", "test");
	$id = (int)$dados['id']; 
   $sql = "DELETE FROM pessoa WHERE id='{$id}'";


    $result = mysqli_query($conn, $sql);

    if ($result) {
        print 'Registro Excluido';
    } else {
        print(mysqli_error($conn));
    }

    mysqli_close($conn);

}

?>
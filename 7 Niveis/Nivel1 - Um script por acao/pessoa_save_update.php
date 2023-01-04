<?php


$dados = $_POST;


if ($dados['id']) {
    $conn = mysqli_connect("localhost", "root", "", "test");
    $sql = "UPDATE pessoa SET nome = '{$dados['nome']}',
                                email = '{$dados['email']}',
                                bairro = '{$dados['bairro']}',
                                telefone = '{$dados['telefone']}',
                                email = '{$dados['email']}',
                                id_cidade = '{$dados['id_cidade']}'
                                WHERE id = '{$dados['id']}'";


    $result = mysqli_query($conn, $sql);

    if ($result) {
        print 'Registro Atualizado';
    } else {
        print(mysqli_error($conn));
    }

    mysqli_close($conn);

}

?>
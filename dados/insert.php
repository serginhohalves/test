<?php

$conn = mysqli_connect("localhost", "root", "", "tables_in_livro");
mysqli_query($conn, "INSERT INTO famosos(codigo, nome) VALUE (1, 'Erico Veríssimo')");
mysqli_query($conn, "INSERT INTO famosos(codigo, nome) VALUE (2, 'Machado de Assis')");
mysqli_query($conn, "INSERT INTO famosos(codigo, nome) VALUE (3, 'José de Alencar')");
mysqli_query($conn, "INSERT INTO famosos(codigo, nome) VALUE (4, 'Jordan Peterson')");
mysqli_query($conn, "INSERT INTO famosos(codigo, nome) VALUE (5, 'Brigitte Gabriel')");
mysqli_query($conn, "INSERT INTO famosos(codigo, nome) VALUE (6, 'Saulo de Tarso')");

mysqli_close($conn);



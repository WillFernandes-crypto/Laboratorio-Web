<?php

require_once 'conexao.php';

if($_POST) {
    $especial = $_POST['especial']; //escolha da consulta (psicologo, neurologista... etc)
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $data = $_POST['data'];
   
 
    $sql = "INSERT INTO consulta (especial, nome, telefone, data) VALUES 
    ('$especial', '$nome','$telefone','$data')";
    if($connect->query($sql) === TRUE) {
        echo "<p>Consulta feita com sucesso</p>";
    } else {
        echo "Erro: " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}

?>
<?php 
 
require_once 'conexao.php';
 
if($_POST) {
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
 
    $sql = "INSERT INTO cadastro (nome, endereco, telefone, email, senha) VALUES 
    ('$nome', '$endereco','$telefone', '$email','$senha')";
    if($connect->query($sql) === TRUE) {
        echo "<p>Usuário cadastrado com sucesso</p>";
    } else {
        echo "Erro: " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 
?>
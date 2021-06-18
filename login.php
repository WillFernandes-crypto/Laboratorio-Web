<?php 


$email = $_POST['email']; //pega email
$senha = $_POST['senha']; //pega senha 
$entrar = $_POST['entrar']; //ver se o usuario clicou mesmo no botao entrar

/**criando conexão */
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('hospital');

//se o usuário clicou então...
if (isset($entrar)) {
           //selecione lá do banco os dados email e senha e verifique se é igual mesmo...
    $verifica = mysql_query("SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
    //se for, então vai ter "linhas afetadas" e isso é bom. mas se no caso
    //como está abaixo, tiver 0 linhas afetadas, então tem algo errado,
    //ou o usuário n estar cadastrado, ou não tá batendo o usuário e a senha  
    if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die(); 
        //se tiver tudo certo
        //então vai criar uma sessão e chamar a página que ele deve chamar
        //seja em html ou php. 
      }else{
        setcookie("login",$login);
        header("Location:taLogado.html");
      }
  
}

?>
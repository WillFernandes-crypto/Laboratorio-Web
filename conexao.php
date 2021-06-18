<?php 
 
$localhost = "127.0.0.1";  
$username = "root";       
$password = "";           
$dbname = "hospital"; /* nome do banco  */ 
 
$connect = new mysqli($localhost, $username, $password, $dbname); 
 
if($connect->connect_error) {
    die("Conexão falhou: " . $connect->connect_error);
} else {
    // echo "funfou";
}
 
?>

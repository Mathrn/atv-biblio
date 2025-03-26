<?php
$host = '127.0.0.1';
$user = 'root';
$password = '';
$dbname = 'livros';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
else{
    echo"conexão deu certo";
}
?>
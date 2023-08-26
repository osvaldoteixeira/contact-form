<?php
// CONECTAR COM O BANCO DE DADOS
  # Para se conectar com um banco de dados mysql, é necessário passar as seguintes informações:
  #1 Servidor;
  #2 Usuário;
  #3 Senha;
  #4 Banco de dados.

// CREDÊNCIAIS DE ACESSO
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'contact-form';

// CONEXÃO COM O BANCO DE DADOS:
$conn = new mysqli($server,$user,$password,$database);

// VERIFICAR CONEXÃO:
if($conn->connect_error){
die("Falha ao se comunicar com o banco de dados: ".$conn->connect_error);
}
?>
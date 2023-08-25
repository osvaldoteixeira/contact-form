<?php
// PEGANDO OS DADOS DO FORMULÁRIO
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = date('d/m/Y'); //dd/mm/aaaa
$hour = date('H:i:s'); //hh:mm:ss

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

// SALVAR OS DADOS NA TABELA DO BANCO DE DADOS:
$smtp = $conn->prepare("INSERT INTO messages (name,email,message,date,hour) VALUES (?,?,?,?,?)"); // EVITAR SQL-INJECTION

$smtp->bind_param("sssss",$name,$email,$message,$date,$hour);

if($smtp->execute()){
  echo "Mensagem enviada com sucesso!";
}else{
  echo "Erro no envio da mensagem: ".$smtp->error;
}

$smtp->close();
$conn->close();
?>
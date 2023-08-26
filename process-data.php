<?php
// REQUISIÇÃO DA CONFIGURAÇÃO DA CONEXÃO COM O BANCO DE DADOS:
require_once 'config.php';

// PEGANDO OS DADOS DO FORMULÁRIO
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = date('d/m/Y'); //dd/mm/aaaa
$hour = date('H:i:s'); //hh:mm:ss

// SALVAR OS DADOS NA TABELA DO BANCO DE DADOS:
$smtp = $conn->prepare("INSERT INTO messages (name,email,message,date,hour) VALUES (?,?,?,?,?)"); // EVITAR SQL-INJECTION

// PREPARAR COMANDO PARA TABELA
$smtp->bind_param("sssss",$name,$email,$message,$date,$hour);

// VERIFICAR A EXECUÇÃO
if($smtp->execute()){
  echo "Mensagem enviada com sucesso!";
}else{
  echo "Erro no envio da mensagem: ".$smtp->error;
}

// ENCERRAR CONEXÃO
$smtp->close();
$conn->close();
?>
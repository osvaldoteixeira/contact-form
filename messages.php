<?php
require_once 'config.php';

$secret_password = "123";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $entered_password = $_POST['password'];

  if($entered_password === $secret_password){
    $sql = "SELECT * FROM messages";
    $result = $conn->query($sql);
  }else{
    echo "<h1>Senha incorreta!</h1>";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Messages</title>
</head>

<body>
  <main>
    <form method="post">
      <!-- Nome: -->
      <label for="password">Senha:</label>
      <input type="password" name="password" placeholder="Digite sua senha" required>

      <!-- Botão Enviar: -->
      <button class="" type="submit">Mostrar Mensagens</button>
    </form>

    <div class="messages">
      <?php if(isset($result) && $result->num_rows > 0) : // : é o mesmo que {}?>
      <h2>Mensagens</h2>
      <ul>
        <?php while($row = $result->fetch_assoc()):?>
        <li>
          <span><strong>Nome: </strong><?php echo $row["name"]; ?><br></span>
          <span><strong>email: </strong><?php echo $row["email"]; ?><br></span>
          <span><strong>Mensagem: </strong><?php echo $row["message"]; ?><br></span>
          <span><strong>Data e hora: </strong><?php echo $row["date"]." às ".$row["hour"]; ?><br></span>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php else : ?>
      <p>Faça login para ver as mensagens.</p>
      <?php endif; ?>
    </div>
  </main>
</body>

</html>
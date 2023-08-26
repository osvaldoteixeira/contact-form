<?php
require_once 'components/comp-networks.php';
require_once 'components/devcard.php';
require_once './components/info-project.php';
?>
<!DOCTYPE html>
<html lang="pt-br" class="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Home</title>
</head>

<body>
  <main class="home">
    <?php echo 
    $devcard,
    $info_project
    ?>
  </main>
</body>

</html>
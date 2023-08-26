<?php
require_once 'comp-networks.php';
$name = "Osvaldo Teixeira";
$office = "Desenvolvedor Web e programador front-end.";
$phrase = "Estudo programação e design
para criar sites cada vez mais bonitos. 💜";

$devcard = '
<div class="dev-card">
  <div class="avatar">
    <img class="" src="./assets/avatar-github-osvaldoteixeira.png"
    alt="foto de Osvaldo Teixeira"/>
  </div>
  <div class="dev-info">
    <div class="bio">
      <h3>
          ' .$name. '
      </h3>
      <span class="office">
        ' .$office. '
      </span>
      <p class="text_bio">
        ' .$phrase. '
      </p>
    </div>
  ' .$comp_networks. '
  </div>
</div>
'
?>
<?php

$conexao = mysqli_connect("localhost","root","","museuGames");
if ($conexao == null){
  die("Não foi possível fazer conexão");
}else{
  echo "<p>Exito na conexao</p>";
}

if(empty($_POST['usuario']) || empty($_POST['senha'])){
  header('Location:index.php');
  exit();
}


 ?>

<?php
  //include_once("../conexao.php");
  $con=mysqli_connect("localhost", "root", "", "museugames");
  
  if (!$con) {
  	$MensagemErro="Erro conexao";
  	include_once("../erro.php");
  } else {
  	  
      $id=$_GET["id_game"];
      $sql = "SELECT game.id_game,game.nome,game.venda_troca,plataforma.nome,usuario.id_usuario
              FROM game 
              INNER JOIN plataforma
              ON plataforma.id_plataforma = game.id_plataforma
              INNER JOIN usuario
              ON usuario.id_usuario = game.id_usuario
              WHERE id_game =?";
  		
      //$con=abreConexao();
      $ps=mysqli_prepare($con, $sql);
  		mysqli_stmt_bind_param($ps,"i",$id);
  		mysqli_stmt_execute($ps);
  		mysqli_stmt_bind_result($ps,$id,$nome_game,$venda_troca,$nome_plataforma,$id_usuario);
  		mysqli_stmt_fetch($ps);

      //$query = mysqli_query($con, "SELECT id_plataforma, nome FROM plataforma");
      //$sql1 = "SELECT id_plataforma, nome FROM plataforma";
      $query = mysqli_query($con, "SELECT id_plataforma, nome FROM plataforma");
  		
      include_once("../../site/editarGame.php");
  }
?>
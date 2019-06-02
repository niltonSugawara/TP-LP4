<?php
  // O header abaixo causará o redirecionamento do navegador para index.php. Não se pode enviar qualquer conteúdo antes de um header.
	header("location:catalogar.php");
	// ver comentário em index.php sobre mysqli_connect
	$conexao = @ mysqli_connect("localhost","root","","museugames");
  if ($conexao == null ) {
    // Se conexão null, houve erro
    die("Falha ao conectar");	
  } else {
    // Ver comentário sobre mysqli_prepare, mysqli_stmt_bind_param e mysqli_stmt_execute em store.php
    $ps = mysqli_prepare($conexao,"UPDATE games SET titulo=?, console=?, vendaTroca=? where id=?");
    mysqli_stmt_bind_param($ps,"sssi",$_POST['editTitulo'],$_POST['editConsole'],$_POST['editSit'],$_POST['editId']);
    mysqli_stmt_execute($ps);
  }
?>
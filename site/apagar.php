<?php
	header("location:catalogar.php");
	// ver comentário em index.php sobre mysqli_connect
	$conexao = @ mysqli_connect("localhost","root","","museugames");
  	if ($conexao == null ) {
      // Se conexão null, houve erro
      die("Falha ao conectar");	
  	} else {
  	  // Comando SQL delete é executado no banco de dados. O vetor $_GET contém o parâmetro "id" da requisão gerada ao ser pressionado o link Excluir em index.php.
  	  mysqli_query($conexao,"delete from games where id=".$_GET['id']);
  	}
?>
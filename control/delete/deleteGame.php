<?php

  	
	if (!isset($_GET["id_game"])) 
	{
		$MensagemErro="Parâmetros inválidos";
		include_once("../create/createPost.php");
	}
	else
	{

        $id=$_GET["id_game"];

        $sql = "DELETE FROM game WHERE id_game = '$id'";           

		if($con=mysqli_connect("localhost", "root", "", "museugames")){
		      mysqli_query($con,$sql);
              mysqli_close($con);
              $MensagemErro="Deletado com Sucesso!";
		      include_once("../create/createPost.php");
		}
		else{
           $MensagemErro="Erro ao conectar";
           include_once("../create/createPost.php");
		}
	}
    

?>
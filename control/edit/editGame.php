<?php

if (!isset($_POST["id_game"])||
        !isset($_POST["titulo"])||
        !isset($_POST["console"])||
        !isset($_POST["venda_troca"])||
        !isset($_POST["id_usuario"])
     ) 
	{
		$MensagemErro="Parâmetros inválidos";
		include_once("../create/createPost.php");
	}
	else
	{

        $id=$_POST["id_game"];
        $ti=$_POST["titulo"];
        $co=$_POST["console"];
        $vt=$_POST["venda_troca"];
        $idu=$_POST["id_usuario"];

        //$sql3 = "UPDATE game SET '{$ti}','{$vt}','{$co}','{$idu}' WHERE id_game='{$id}'";           

		if($con=mysqli_connect("localhost", "root", "", "museugames")){
		      mysqli_query($con, "UPDATE game SET nome='{$ti}', venda_troca='{$vt}', id_plataforma='{$co}' WHERE id_game='{$id}'");
          mysqli_close($con);
          $MensagemErro="Jogo alterado com sucesso";
          include_once("../create/createPost.php");
		}
		else{
           $MensagemErro="Erro ao conectar";
           include_once("../create/createPost.php");
		}
	}
    

?>
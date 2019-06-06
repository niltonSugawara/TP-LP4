<?php

  	
	if (!isset($_POST["usuario_id"])||
        !isset($_POST["titulo"])||
        !isset($_POST["console"])||
        !isset($_POST["venda_troca"])
     ) 
	{
		$MensagemErro="Parâmetros inválidos";
    
    $id=$_POST["usuario_id"];
    $ti=$_POST["titulo"];
    $co=$_POST["console"];
    $vt=$_POST["venda_troca"];


		include_once("createPost.php");
	}
	else
	{

        $id=$_POST["usuario_id"];
        $ti=$_POST["titulo"];
        $co=$_POST["console"];
        $vt=$_POST["venda_troca"];

        $sql = "INSERT INTO game VALUES(0,'$ti','$vt','$co','$id')";           

		if($con=mysqli_connect("localhost", "root", "", "museugames")){
		      mysqli_query($con,$sql);
          mysqli_close($con);
          $MensagemErro="Game Inserido com sucesso";
          include_once("createPost.php");
		}
		else{
           $MensagemErro="Erro ao conectar";
           include_once("createPost.php");
		}
	}
    

?>
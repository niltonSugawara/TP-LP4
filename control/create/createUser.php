<?php
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$id="";$nm="";$cpf="";$ed="";$te="";$ce="";
  	include_once("createGet.php");
  } 
  else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	
	if (!isset($_POST["nome"]) || 
		!isset($_POST["sobrenome"]) ||
		!isset($_POST["endereco"])||
		!isset($_POST["telefone"]) ||
		!isset($_POST["email_cadastro"]) ||
		!isset($_POST["senha"])  
	   ) 
	{
		$MensagemErro="Parâmetros inválidos";
	}
	else
	{

    $nm=$_POST["nome"];
		$sm=$_POST["sobrenome"];
		$en=$_POST["endereco"];
		$tel=$_POST["telefone"];
		$em=$_POST["email_cadastro"];
		$se=$_POST["senha"];

        $sql = "INSERT INTO usuario VALUES(0,'$nm','$sm','$en','$tel','$em','$se')";

        $sqldelete = "DELETE FROM usuario WHERE id_usuario = 1";

        $sqljoin = "SELECT game.id_game,game.nome,game.venda_troca,plataforma.nome,empresa.nome FROM game,plataforma,empresa,usuario WHERE usuario.id = ''";

        $sqlt = "SELECT game.id_game,
                       game.nome AS nome_game,
                       plataforma.nome AS nome_plataforma,
                       empresa.nome AS nome_empresa,
                       game.venda_troca,
                       usuario.nome AS nome_usuario
                       FROM
                       game,plataforma,empresa,usuario
                       WHERE
                       usuario.id_usuario = '{$id}'"

        $sqltt= "SELECT
                       game.id_game,
                       game.nome AS nome_game,
                       plataforma.nome AS nome_plataforma,
                       empresa.nome AS nome_empresa,
                       game.venda_troca,
                       usuario.nome AS nome_usuario
                    FROM game
                    INNER JOIN plataforma
                       ON plataforma.id_plataforma = game.id_plataforma
                    INNER JOIN empresa
                       ON empresa.id_empresa = plataforma.id_empresa
                    INNER JOIN usuario
                       ON usuario.id_usuario = '{$id}'   
                    ";               

        $sqljoin2 = "SELECT
                       game.id_game,
                       game.nome,
                       game.venda_troca,
                       plataforma.nome,
                       empresa.nome,
                       usuario.nome
                    FROM game
                    INNER JOIN plataforma
                       ON plataforma.id_plataforma = game.id_plataforma
                    INNER JOIN empresa
                       ON empresa.id_empresa = plataforma.id_empresa
                    INNER JOIN usuario
                       ON usuario.id_usuario = '1'   
                    ORDER BY game.id_game";

        $sqljoin3 = "SELECT
                       game.id_game,
                       game.nome,
                       game.venda_troca,
                       plataforma.nome,
                       empresa.nome,
                       usuario.nome
                    FROM game
                    INNER JOIN plataforma
                       ON plataforma.id_plataforma = game.id_plataforma
                    INNER JOIN empresa
                       ON empresa.id_empresa = plataforma.id_empresa
                    INNER JOIN usuario
                       ON usuario.id_usuario = game.id_usuario   
                    ORDER BY game.id_game";            

		if($con=mysqli_connect("localhost", "root", "", "museugames")){
		      mysqli_query($con,$sql);
              mysqli_close($con);
              $MensagemErro="Proprietário cadastrado";
              echo $nm."<br>".
                   $sm."<br>".
                   $en."<br>".
                   $tel."<br>".
                   $em."<br>".
                   $se;	
		}
		else{
           $MensagemErro="Erro ao conectar";
		}
	}
    include_once("createPost.php");
  } 
  else {
  	include_once("erro.php");
  }
?>
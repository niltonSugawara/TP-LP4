<?php
session_start();
include("../conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$sobrenome = mysqli_real_escape_string($conexao, trim($_POST['sobrenome']));
$endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));


$sql = "INSERT INTO usuario (nome, sobrenome, endereço, telefone, email, senha) VALUES ('$nome', '$sobrenome', '$endereco', '$telefone', '$email', '$senha')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	$MensagemErro="Proprietário cadastrado";
}

$conexao->close();

header('Location: createPost.php');
exit;
?>




<?php
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$id="";$nm="";$cpf="";$ed="";$te="";$ce="";
  	include_once("createGet.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Proprietário cadastrado";
	if (!isset($_POST["nome"]) || 
		!isset($_POST["sobrenome"]) ||
		!isset($_POST["endereco"])||
		!isset($_POST["telefone"]) ||
		!isset($_POST["email"]) ||
		!isset($_POST["senha"])  
	   ) 
	{
		$MensagemErro="Parâmetros inválidos";
	}
	else
	{
		include_once("../conexao.php");
		$con=abreConexao();
		$ps=mysqli_prepare($con,"INSERT INTO usuario VALUES(?,?,?,?,?,?)");
		mysqli_stmt_bind_param($ps,'ssssss',$nm,$sm,$en,$tel,$em,$se);
		$nm=$_POST["nome"];
		$sm=$_POST["sobrenome"];
		$en=$_POST["endereco"];
		$tel=$_POST["telefone"];
		$em=$_POST["email"];
		$se=$_POST["senha"];
		mysqli_stmt_execute($ps);

	}
    include_once("createPost.php");
  } else {
  	include_once("erro.php");
  }
?>

<?php 

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$endereco = $_POST["endereco"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$senha = $_POST["senha"];
      

include_once("../conexao1.php");
$stmt = mysqli_stmt_init($conexao);
      
$ps=mysqli_prepare($conexao,"INSERT INTO usuario VALUES(?,?,?,?,?,?)");
mysqli_stmt_bind_param($ps,'ssssss',$nome,$sobrenome,$endereco,$telefone,$email,$senha);
mysqli_stmt_execute($ps);


 ?>


 <?php  
 session_start();
 
 $connect = mysqli_connect("localhost", "root", "", "museugames");  
 
 $nome = $_POST["nome"];
 $sobrenome = $_POST["sobrenome"];
 $endereco = $_POST["endereco"];
 $telefone = $_POST["telefone"];
 $email = $_POST["email_cadastro"];
 $senha = $_POST["senha"];

 
 
      $query = "INSERT INTO usuario (nome, sobrenome, endereço, telefone, email, senha) VALUES(?,?,?,?,?,?)";  
      
      $stmt = mysqli_stmt_init($connect);
      if(!mysqli_stmt_prepare($stmt, $query)) {
          echo 'No';
      } 
      else { 
          mysqli_stmt_bind_param($stmt,'ssssss', $nome,$sobrenome,$endereco,$telefone,$email,$senha);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if(mysqli_num_rows($result) > 0)
          {
          		echo 'Yes';
          }     
          if(mysqli_num_rows($result) == 0)  
	      { 
	           echo 'No';
	      }  
	      else  
	      {  
	           echo 'No';  
	      }      
	  }
      
  
?>

<?php
        $sql = "INSERT INTO usuario (nome, sobrenome, endereço, telefone, email, senha) VALUES(?,?,?,?,?,?)";

		//include_once("../conexao.php");
		//$con = abreConexao();
		
		if($con=mysqli_connect("localhost", "root", "", "museugames")){
		   if($ps=mysqli_prepare($con,"INSERT INTO usuario (nome, sobrenome, endereço, telefone, email, senha) VALUES(?,?,?,?,?,?)")){
              mysqli_stmt_bind_param($ps,'ssssss',$nm,$sm,$en,$tel,$em,$se);
              mysqli_stmt_execute($ps);
              $MensagemErro="Proprietário cadastrado";
		   }
		   else{
		   	  $MensagemErro="Erro ao preparar comando";
		   }
		   mysqli_close($con);	
		}
		else{
           $MensagemErro="Erro ao conectar";
        }
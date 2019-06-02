<?php
  header("location:catalogar.php");

      $conexao = @ mysqli_connect("localhost","root","","museugames");

  if ($conexao == null) {
    die("falha ao conectar");
}else{
$ps = mysqli_prepare($conexao,"INSERT games VALUES (?,?,?,?)");   
mysqli_stmt_bind_param($ps,"isss",$_POST['id'],$_POST['titulo'],$_POST['console'],$_POST['vendaTroca']); 
mysqli_stmt_execute($ps);
}
?>
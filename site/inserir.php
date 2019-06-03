<?php
  header("location:catalogar.php");

      $conexao = @ mysqli_connect("localhost","root","","museugames");

  if ($conexao == null) {
    die("falha ao conectar");
}else{
$ps = mysqli_prepare($conexao,"INSERT INTO games (titulo,console,vendaTroca) VALUES (?,?,?)");   
mysqli_stmt_bind_param($ps,"sss",$_POST['titulo'],$_POST['console'],$_POST['vendaTroca']); 
mysqli_stmt_execute($ps);
}
?>
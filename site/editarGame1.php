<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
  include("includes/head.php");
?>
<title>Editar Jogo | Museu dos Jogos</title>
</head>
<body>

<div class="container conteudoCorpo">
<form class="form-control" action="../control/edit/editGame.php" method="post">
 
 <div class="form-group">
    <label for="id_game">ID </label>
    <input type="number" class="form-control" name="id_usuario" value="<?= $id_usuario ?>" disabled />
    
</div>

<div class="form-group">
    <label for="id_game">ID </label>
    <input type="number" class="form-control" name="id_game" value="<?= $id ?>" disabled />
    
</div>

<div class="form-group">
      <label for="titulo" >Nome  </label>
      <input type="text"  class=" form-control" name="titulo" value="<?= $nome_game ?>" required/>
</div>

<div class="form-group">
      <label for="venda_troca">Venda ou Troca? </label>
      <input type="text" class="form-control" name="venda_troca" value="<?= $venda_troca ?>" required/>
</div>

<div class="form-group">
<?php
    //if(!isset($con))include_once("../control/conexao.php");
    //if(!isset($con)) $con = abreConexao();         
    //$query = mysqli_query($con, "select id_plataforma, nome from plataforma");
    echo $query;
?>  
      <select name="console" id="console" class="form-control">
               <option value=""><?=$nome_plataforma?></option>
               <?php
               foreach($query as $key => $prod)
               {
                echo "<option value=".$prod['id_plataforma']." >".$prod['nome']."</option>"; 
               }
               ?>
      </select>
 <?php //mysqli_close($con); ?>      
</div>


<button type="submit" class="btn btn-success"  data-toggle="tooltip" title="Adicionar"/>Adicionar</button>

</form>

</div>
<?php include("includes/footer.php"); ?>
</body>
</html>
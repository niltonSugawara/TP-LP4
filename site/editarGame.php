<?php  
  
  $con=mysqli_connect("localhost", "root", "", "museugames");
  
  if (!$con) {
    $MensagemErro="Erro conexao";
    include_once("../erro.php");
  } else {
      
      $id=$_GET["id_game"];
      $sql = "SELECT game.id_game,
                     game.nome AS nome_game,
                     game.venda_troca,
                     plataforma.nome AS nome_plataforma,
                     usuario.id_usuario
              FROM game 
              INNER JOIN plataforma
              ON plataforma.id_plataforma = game.id_plataforma
              INNER JOIN usuario
              ON usuario.id_usuario = game.id_usuario
              WHERE id_game = '{$id}'";
      
      //$con=abreConexao();
      $query1 = mysqli_query($con, $sql);
      //$query = mysqli_query($con, "SELECT id_plataforma, nome FROM plataforma");
      //$sql1 = "SELECT id_plataforma, nome FROM plataforma";
      $query2 = mysqli_query($con, "SELECT id_plataforma, nome FROM plataforma");
      

  }
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
<?php
include("includes/header.php");
?>
<div class="container conteudoCorpo">
<form class="form-control" action="../control/edit/editGame.php" method="post">
<?php  while($prod1 = mysqli_fetch_array($query1)) {?> 
    
<input type="hidden" class="form-control" name="id_usuario" value="<?= $prod1['id_usuario'] ?>"/>
    
<input type="hidden" class="form-control" name="id_game" value="<?= $prod1['id_game'] ?>"/>

<div class="form-group">
      <label for="titulo">Nome</label>
      <input type="text"  class=" form-control" name="titulo" value="<?= $prod1['nome_game'] ?>" required/>
</div>

<div class="form-group">
      <label for="venda_troca">Venda ou Troca? </label>
      <input type="text" class="form-control" name="venda_troca" value="<?= $prod1['venda_troca'] ?>" required/>
</div>

<div class="form-group">

      <select name="console" id="console" class="form-control">
               <option value=""><?=$prod1['nome_plataforma']?></option>
<?php } ?>  
               <?php
               while($prod2 = mysqli_fetch_array($query2))
               {
                echo "<option value=".$prod2['id_plataforma']." >".$prod2['nome']."</option>"; 
               }
               ?>
      </select>
      
</div>


<button type="submit" class="btn btn-success"  data-toggle="tooltip" title="Adicionar"/>Adicionar</button>

</form>

</div>

<?php include("includes/footer.php"); ?>
</body>
</html>
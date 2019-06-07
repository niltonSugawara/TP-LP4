<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
  include("includes/head.php");
?>
<title>Catalogar | Museu dos Jogos</title>
</head>
<body>

<?php
include("includes/header.php");
?>
<div class="container conteudoCorpo">

<h1 align="center">Local de catalogar os jogos do usuario</h1>
<h3 align="center">tela somente deve aparecer quando usuario estiver logado</h3>

<div class="container">
    <table class="table table-responsive-md">
      <thead>
        <tr>
          <th>Título do Jogo</th>
          <th>Console/Plataforma</th>
          <th>Venda/Troca</th>
          <th>Cadastrar</th>
        </tr>
      </thead>
      <tbody>
        <form action="../control/create/createGame.php" method="post" accept-charset="utf-8">
          <?php $id=$_SESSION['id'];  ?>
          <input type="hidden" name="usuario_id" value="<?= $id ?>"/>
          <tr>
          <td><input type="text" name="titulo"  class="form-control" size="20" placeholder="Jogo"></td>
          <td>
            <?php
                 if(!isset($con))include("../control/conexao.php");
                 if(!isset($con)) $con = abreConexao();
                 $query = mysqli_query($con, "select id_plataforma, nome from plataforma");
            ?>
            <select name="console" class="form-control">
               <option value="">Consoles</option>
               <?php
               while($prod = mysqli_fetch_array($query))
               {
                echo "<option value=".$prod['id_plataforma']." >".$prod['nome']."</option>"; 
               }
               ?>
             </select>  
            
          </td>
          <td>
          <select name="venda_troca" class="form-control">
          <option value="Venda">Venda</option>
          <option value="Troca">Troca</option>
          </select>
          </td>
          <td><button class="btn btn-primary" type="submit" >Cadastrar</button></td>
          </tr>
        </form>
      </tbody>
    </table>
</div>
<h1 align="center">Jogos catalogados pelo usuario</h1>
<div class="table-responsive-sm">
        <table class="table table-bordered">
          <thead>
          <tr>
            <th>#</th>
            <th>Título</th>
            <th>Consoler/Plataforma</th>
            <th>Empresa</th>
            <th>Venda/Troca</th>
            <th>Usuario</th>
          </tr>
          </thead>
          <?php
                 if(!isset($con))include("../control/conexao.php");
                 if(!isset($con)) $con = abreConexao();
                 //$id=$_SESSION['id'];
                 $sql = "SELECT
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
                       ON usuario.id_usuario = game.id_usuario
                    WHERE   
                        game.id_usuario = '{$id}'  
                    ORDER BY game.id_game";
                 $query = mysqli_query($con, $sql);
            ?>
          <tbody>
            <?php
            while($prod = mysqli_fetch_array($query))
            { ?>
            <tr>
              <td><?= $prod['id_game'] ?></td>
              <td><?= $prod['nome_game'] ?></td>
              <td><?= $prod['nome_plataforma'] ?></td>
              <td><?= $prod['nome_empresa'] ?></td>
              <td><?= $prod['venda_troca'] ?></td>
              <td><?= $prod['nome_usuario'] ?></td>
              <td><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button" >Opções</button>
              <div class="dropdown-menu">
                   <a class="editar_game dropdown-item"  name="<?= $prod['id_game'] ?>" href="editarGame.php?id_game=<?= $prod['id_game'] ?>">Editar</a>
                   <a class="exluir_game dropdown-item"  name="<?= $prod['id_game'] ?>" href="../control/delete/deleteGame.php?id_game=<?= $prod['id_game'] ?>">Excluir</a>
              </div>
              </td>
            </tr>
            <?php } ?>
          </tbody>
          <?php //mysqli_close($con); ?>
        </table>
</div>

<?php include("includes/footer.php"); ?>
</div>
<script>

$(document).ready(function() {

   function editarGame(id) {
    var id_game = id;
    if(id_game != '')  
           {  
                $.ajax({  
                     url:"../control/edit/editGameGET.php",  
                     method:"POST",  
                     data: {id_game:id_game},  
                     success:function(data)  
                     {  
                          //alert(data);  
                          if(data == 'No')  
                          {  
                               alert("Wrong Data");  
                          }  
                          else  
                          {  
                               //$('#loginModal').hide();  
                               location.reload();  
                          }  
                     }  
                });  
           }  
           else  
           {  
                alert("Both Fields are required");  
           }  

   }

   function excluirGame(id) {
    var id_game = id;
    if(id_game != '')  
           {  
                $.ajax({  
                     url:"../control/delete/deleteGame.php",  
                     method:"POST",  
                     data: {id_game:id_game},  
                     success:function(data)  
                     {  
                          //alert(data);  
                          if(data == 'No')  
                          {  
                               alert("Wrong Data");  
                          }  
                          else  
                          {  
                               //$('#loginModal').hide();  
                               location.reload();  
                          }  
                     }  
                });  
           }  
           else  
           {  
                alert("Both Fields are required");  
           }  

   }
   
   $('.editar_game').click(function()
    {
        var id = $(this).attr('id');
        editarGame(id);
    });
    $('.excluir_game').click(function()
    { 
        var id = $(this).attr('id');
        excluirGame(id);
    });

});  
  
</script>
</body>
</html>

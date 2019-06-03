<?php
$conexao = @ mysqli_connect("localhost","root","","museugames");
$tab = mysqli_query($conexao,"select id,titulo,console,vendaTroca from games");


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
  include("includes/head.php");
?>
    <title>Home | Museu dos Jogos</title>
</head>
<body>

<?php
include("includes/header.php");
?>
<div class="container conteudoCorpo">

<h1 align="center">Local de catalogar os jogos do usuario</h1>
<h3 align="center">tela somente deve aparecer quando usuario estiver logado</h3>
<br>
<div class="container">
    <table class="table table-borderless table-responsive-md">
      <thead class="centro">
        <tr>
          <th>Título do Jogo</th>
          <th>Console</th>
          <th>Venda/Troca</th>
          <th>Cadastrar</th>
        </tr>
      </thead>
      <tbody>
        <form action="inserir.php" method="post" id="insere" >
          <tr>
          <td><input class="form-control" type="text" name="titulo" placeholder="Que Mario?"></td>
          <td><input class="form-control" type="text" name="console" placeholder="Aquele"></td>
          <td>
          <select class="form-control" name="vendaTroca">
          <option value="Venda">Venda</option>
          <option value="Troca">Troca</option>
          </select>
          </td>
          <td><button class="btn btn-primary form-control" type="submit" >Cadastrar</button></td>
        </tr>
        </form>
      </tbody>
    </table>
</div>
<br>
<h1 align="center">Exibir jogos catalogados pelo usuario</h1>
<div class="table-responsive-sm">
        <table class="table table-bordered">
          <thead>
          <tr>
            <th>#</th>
            <th>Título</th>
            <th>Console</th>
            <th>Usuários</th>
            <th>Venda/Troca</th>
            <th>Contato(Tel)</th>
            <th>Enviar Mensagem</th>
          </tr>
          </thead>        
          <?php while ($lin = mysqli_fetch_assoc($tab)) {?>
          <tbody>
          <td><?php echo $lin['id'] ?></td>
          <td><?php echo $lin['titulo']; ?></td>
          <td><?php echo $lin['console']; ?></td>
          <td><?php echo "Usuario"; ?></td>
          <td><?php echo $lin['vendaTroca']; ?></td>
          <td><?php echo "telefone Usuario";?></td>
          <td><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button" >Opções</button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editarModal<?php echo $lin['id']?>" >Editar</a>
              <a class="dropdown-item" href="apagar.php?id=<?=$lin['id']?>" >Excluir</a>
          </div>
          </tbody>

          <div>
         
      <div class="modal fade" id="editarModal<?php echo $lin['id']?>" tabindex="1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5>Editar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="close"></button>
                <span aria-hidden="true">&times;</span>
            </div>
            <div class="modal-body">
              <form action="editar.php" method="POST">
                <div class="form-group">
                  <label for="editTitulo">Titulo</label><input class="form-control"  type="text" name="editTitulo" >
                </div>
                <div class="form-group">
                    <label for="editConsole">Console</label><input class="form-control"  type="text" name="editConsole">
                  </div>
                  <div class="form-group">
                      <select class="form-control" name="editSit" id="editSit" >
                        <option value="Venda">Venda</option>
                        <option value="Troca">Troca</option>
                      </select>
                    </div>
                    <div name="editId"></div>
                    <div>
                    <button type="submit" class="btn btn-primary">Alterar</button>  
                    </div>
              </form>
            </div>
          </div>
        </div>



          <?php }?>
        </table>
      </div>

      
      
      
      </div>
    </div>


                        


















<?php include("includes/footer.php"); ?>
</div>

</body>
</html>

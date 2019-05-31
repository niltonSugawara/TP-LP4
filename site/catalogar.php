<?php
session_start();
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

<div class="container">
    <table class="table table-responsive">
      <thead>
        <tr>
          <th>Título do Jogo</th>
          <th>Console</th>
          <th>Venda/Troca</th>
          <th>Cadastrar</th>
        </tr>
      </thead>
      <tbody>
        <form action="catalogar_submit" method="post" accept-charset="utf-8">
          <tr>
          <td><input type="text" name="titulo" size="35" placeholder="Que Mario?"></td>
          <td><input type="text" name="console" size="10" placeholder="Aquele"></td>
          <td><input type="text" name="vendaTroca" size="6" placeholder="Que te comeu atrás do armário"></td>
          <td><button class="btn btn-primary" type="submit" >Cadastrar</button></td>
        </tr>
        </form>
      </tbody>
    </table>
</div>
<h1 align="center">Exibir jogos catalogados pelo usuario</h1>
<div class="table-responsive-sm">
        <table class="table table-bordered">
          <thead>
          <tr>
            <th>Título</th>
            <th>Console</th>
            <th>Usuários</th>
            <th>Venda/Troca</th>
            <th>Contato(Tel)</th>
            <th>Enviar Mensagem</th>
          </tr>
          </thead>
          <tbody>
            <tr>
              <td>Donkey Kong Country</td>
              <td>Super Nintendo</td>
              <td>Nilton M.</td>
              <td>Venda</td>
              <td>(01)12345-0987</td>
              <td><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button" >Opções</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#" >Editar</a>
              <a class="dropdown-item" href="#" >Excluir</a>
            </div>
          </td>
            </tr>
          </tbody>
        </table>
      </div>

<?php include("includes/footer.php"); ?>
</div>

</body>
</html>

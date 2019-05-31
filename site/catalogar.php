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
    <table class="table">
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
          <td><input type="text" name="titulo" placeholder="Que Mario?"></td>
          <td><input type="" name="console" placeholder="Aquele"></td>
          <td><input type="" name="vendaTroca" placeholder="Que te comeu atrás do armário"></td>
          <td><button class="btn btn-primary" type="submit" >Cadastrar</button></td>
        </tr>
        </form>
      </tbody>
    </table>
</div>
<h1 align="center">Exibir jogos catálogados pelo usuario</h1>
<div class="container">
    <table class="table">
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
          <td><input type="text" name="titulo" placeholder="Que Mario?"></td>
          <td><input type="" name="console" placeholder="Aquele"></td>
          <td><input type="" name="vendaTroca" placeholder="Que te comeu atrás do armário"></td>
          <td><button class="btn btn-primary" type="submit" >Cadastrar</button></td>
        </tr>
        </form>
      </tbody>
    </table>
</div>

<?php include("includes/footer.php"); ?>
</div>

</body>
</html>

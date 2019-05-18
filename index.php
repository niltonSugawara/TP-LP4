<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="resources/game.png">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <title>Museu dos Jogos</title>
  </head>
  <body>

    <div class="container">
      <div class="nav navbar-light" id="txtBase">
        <a class="navbar-brand font-weight-bold" href="#">
          <img src="resources/game.png" width="50" height="50" class="d-inline-block" alt="">
          Museu dos Jogos
        </a>
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navtxt">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="sistemas.php">Sistemas</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="sobre.php">Sobre</a>
            </li>
          </ul>
          <a href="login.php" class="btn btn-dark">Entrar</a>
        </div>
      </nav>
    </div>
    <div class="container">
      <h1>Teste de Página</h1>
        <p>incluindo um link de página <a href="pagina2.php">pagina 2</a></p>
        <div class="row">
          <div class="col" style="background-color:blue;">Coluna 1</div>
          <div class="col" style="background-color:red;">Coluna 2</div>
          <div class="col" style="background-color:orange;">Coluna 3</div>
          <div class="col" style="background-color:green;">Coluna 4</div>
        </div>
        <div class="row">
          <div class="col" style="background-color:grey;">Coluna 4</div>
        </div>
    </div>
    <div class="container">
      <form class="" action="login.php" method="post">
        <label>Usuário<input type="text" name="usuario" value=""></label>
        <label>Senha<input type="password" name="senha" value=""></label>
        <input type="submit" value="Login">
      </form>

    </div>

  </body>
</html>

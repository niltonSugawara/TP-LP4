<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
  include("includes/head.php");
?>
  <title>Plataformas | Museu dos jogos</title>
</head>
<body>
<?php 
include("includes/header.php");
?>
<div class="container conteudoCorpo">

    <div class="container">
         <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Nintendo</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">eita</a>
            </div>
        </div>
         <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Sega</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">eita</a>
            </div>
        </div>
         <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Sony</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">eita</a>
            </div>
        </div>
         <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Microsoft</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">eita</a>
            </div>
        </div>
    </div>


<br>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Jogo</th>
                    <th>Usuário</th>
                    <th>Venda/Troca</th>
                    <th>Mandar Mensagem</th>
                </tr>
            </thead>
        </table>
    </div>
    

    
    
    </div>
<?php include("includes/footer.php"); ?>
</body>
</html>
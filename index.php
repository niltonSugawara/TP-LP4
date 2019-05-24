<?php 
    session_start();
    include("header.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/padrao.css">
    <link rel="icon" href="resources/game.png">
    <title>Museu dos Jogos</title>
  </head>
  <body>
    <div class="container">
      <h1 align="center">Bem Vindo ao Museu dos Jogos</h1>
       <div id="carouselGames" class="carousel slide carousel-fade" data-ride="carousel" align="center">
        	<div class="carousel-inner">
        		<div class="carousel-item active">
        			<img id="tamPadrao" class="d-block w-50" alt="Primeiro Slide" src="resources/superMarioWorld">
        		</div>
        		<div class="carousel-item">
        			<img id="tamPadrao" class="d-block w-50" alt="Segundo Slide" src="resources/pacman">
        		</div>
        		<div class="carousel-item">
        			<img id="tamPadrao" class="d-block w-50" alt="Terceiro Slide" src="resources/spaceInvaders">
        		</div>
        		<div class="carousel-item">
        			<img id="tamPadrao" class="d-block w-50" alt="Quarto Slide" src="resources/sonicTheHedgehog">
        		</div>
        	</div>
        </div>


    </div>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>

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
    <div class="container">
      <h1 align="center">Bem Vindo ao Museu dos Jogos</h1>
      <div id="carouselGames" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000" data-pause="false" align="center">
         <div class="carousel-inner">
          <div class="carousel-item active">
               <img id="tamPadrao" class="d-block w-50" alt="Primeiro Slide" src="../resources/images/pacman.gif">
           </div>
            <div class="carousel-item">
               <img id="tamPadrao" class="d-block w-50" alt="Segundo Slide" src="../resources/images/streetFighter.gif">
           </div>
           <div class="carousel-item">
               <img id="tamPadrao" class="d-block w-50" alt="Terceiro Slide" src="../resources/images/frogger.gif">
           </div>
           <div class="carousel-item">
               <img id="tamPadrao" class="d-block w-50" alt="Quarto Slide" src="../resources/images/sonic_intro.gif">
           </div>
           <div class="carousel-item">
               <img id="tamPadrao" class="d-block w-50" alt="Quinto Slide" src="../resources/images/superMarioWorld.gif">
           </div>
           <div class="carousel-item">
               <img id="tamPadrao" class="d-block w-50" alt="Quinto Slide" src="../resources/images/mortalKombat.gif">
           </div>
       </div>
   </div>
</div>

<div class="container">
    <h3 align="center">Site desenvolvido para o jogador criar seu portifólio de jogos de videogames!</h3>        
</div>


</div>
<?php include("includes/footer.php"); ?>    
</body>
</html>

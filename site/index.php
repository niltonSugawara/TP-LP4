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
    <div class="container">
      <h1 align="center">Bem Vindo ao Museu dos Jogos</h1>
      <div id="carouselGames" class="carousel slide carousel-fade" data-ride="carousel" align="center">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img id="tamPadrao" class="d-block w-50" alt="Primeiro Slide" src="../resources/images/superMarioWorld">
           </div>
           <div class="carousel-item">
               <img id="tamPadrao" class="d-block w-50" alt="Segundo Slide" src="../resources/images/pacman">
           </div>
           <div class="carousel-item">
               <img id="tamPadrao" class="d-block w-50" alt="Terceiro Slide" src="../resources/images/spaceInvaders">
           </div>
           <div class="carousel-item">
               <img id="tamPadrao" class="d-block w-50" alt="Quarto Slide" src="../resources/images/sonicTheHedgehog">
           </div>
       </div>
   </div>
</div>

<div class="container">
    <h3 align="center">Site desenvolvido para o jogador criar seu portifólio de jogos e videogames!</h3>        
</div>

<div class="container">
    <div class="row">
        <div class="col" style="background-color: blue">a</div>
        <div class="col" style="background-color: green">b</div>
    </div>
</div>

<?php include("includes/footer.php"); ?>    
</body>
</html>

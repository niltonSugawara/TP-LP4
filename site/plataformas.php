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
                <button class="dropdown-item" id="nes" >Nintendo</button>
                <button class="dropdown-item" id="snes" >Super Nintendo</button>
                <button class="dropdown-item" id="n64" >Nintendo64</button>
                <button class="dropdown-item" id="gb" >GameBoy</button>
                <button class="dropdown-item" id="gc" >GameCube</button>
                 <button class="dropdown-item" id="wii" >WII</button>
                 <button class="dropdown-item" id="wiiu" >WIIU</button>
                 <button class="dropdown-item" id="switch" >SWICTH</button>
            </div>
        </div>
         <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Sega</button>
            <div class="dropdown-menu">
                    <button class="dropdown-item" id="msm" >Master System</button>
                    <button class="dropdown-item" id="md" >Megadrive</button>
                    <button class="dropdown-item" id="gg" >GameGear</button>
                    <button class="dropdown-item" id="st" >Saturn</button>
                    <button class="dropdown-item" id="drc" >Dreamcast</button>
            </div>
        </div>
         <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Sony</button>
            <div class="dropdown-menu">
                    <button class="dropdown-item" id="play1" >Playstation</button>
                    <button class="dropdown-item" id="play2" >Playstation 2</button>
                    <button class="dropdown-item" id="psp" >Playstation Portable</button>
                    <button class="dropdown-item" id="play3" >Playstation 3</button>
                    <button class="dropdown-item" id="play4" >Playstation 4</button>
            </div>
        </div>
         <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Microsoft</button>
            <div class="dropdown-menu">
                    <button class="dropdown-item" id="xb" >Xbox</button>
                    <button class="dropdown-item" id="x360" >Xbox 360</button>
                    <button class="dropdown-item" id="xone" >Xbox One</button>
            </div>
        </div>
    </div>

<br>
    <div class="container">
        <table class="table table-responsive-md table-striped">
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
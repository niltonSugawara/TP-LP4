<?php
     //if(!isset($con))include("../control/conexao.php");
     //if(!isset($con)) $con = abreConexao();
     //$id=$_SESSION['id'];
     $con=mysqli_connect("localhost", "root", "", "museugames");
     $sql = "SELECT
               plataforma.nome AS nome_plataforma,
               empresa.nome AS nome_empresa
            FROM plataforma
            INNER JOIN empresa
               ON empresa.id_empresa = plataforma.id_empresa  
            ORDER BY plataforma.id_plataforma";
     $query = mysqli_query($con, $sql);
     //echo $query;
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

    <table class="table table-bordered">
          <thead>
          <tr>
            <th>Console/Plataforma</th>
            <th>Empresa</th>
          </tr>
          </thead>
          <tbody>
            <?php
            while($prod = mysqli_fetch_array($query))
            { ?>
            <tr>
              <td><?= $prod['nome_plataforma'] ?></td>
              <td><?= $prod['nome_empresa'] ?></td>
            </tr>
            <?php } ?>
          </tbody>
          <?php //mysqli_close($con); ?>
    </table>  
    
</div>
<?php include("includes/footer.php"); ?>
</body>
</html>
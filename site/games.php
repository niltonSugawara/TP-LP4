<?php
     //if(!isset($con))include("../control/conexao.php");
     //if(!isset($con)) $con = abreConexao();
     //$id=$_SESSION['id'];
     $con=mysqli_connect("localhost", "root", "", "museugames");
     $sql = "SELECT
               game.nome AS nome_game,
               plataforma.nome AS nome_plataforma,
               game.venda_troca,
               usuario.nome AS nome_usuario
            FROM game
            INNER JOIN plataforma
               ON plataforma.id_plataforma = game.id_plataforma
            INNER JOIN usuario
               ON usuario.id_usuario = game.id_usuario 
            ORDER BY game.id_game";
     $query = mysqli_query($con, $sql);
     //echo $query;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
  include("includes/head.php");
?>
	<title>Games | Museu dos Jogos</title>
</head>
<body>
<?php
include("includes/header.php");
?>
<div class="container total">
<div class="container conteudoCorpo">
<div class="container">
		<div class="row">
			<div class="table-responsive-sm">
				<table class="table table-bordered">
					<thead>
					<tr>
						<th>Título</th>
						<th>Console</th>
						<th>Usuário</th>
						<th>Venda/Troca</th>
					</tr>
					</thead>
					<tbody>
				    <?php
                        while($prod = mysqli_fetch_array($query))
                    { ?>		
						<tr>
						<td><?= $prod['nome_game'] ?></td>
						<td><?= $prod['nome_plataforma'] ?></td>
						<td><?= $prod['nome_usuario'] ?></td>
						<td><?= $prod['venda_troca'] ?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
</div>

</div>
</div>
<?php include("includes/footer.php"); ?>
</body>
</html>

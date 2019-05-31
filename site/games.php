<?php
session_start();
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
						<th>Plataformas</th>
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
							<td>
								<a  href="" class="text-primary" data-toggle="modal"
					data-target="#formModalTxt">Enviar</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
</div>

<!-- Modal de envio de mensagem-->
<div class="modal fade" id="formModalTxt" tabindex="-1" role="dialog" aria-labelledby="modalform" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
							<h5>Mensagem</h5>
							<button type="button" class="close" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
				</div>
				<!--Corpo do Modal de Login -->
				<div class="modal-body">
						<form action="#" method="post">
							<div class="form-group">
								<label for="email">Seu Email</label> <input type="email" name="email"
										class="form-control" id="email" required>
							</div>
							<div class="form-group">
								<label for="msg">Mensagem a ser enviada</label>
								<br>
								<textarea class="form-control" name="msgTxt" rows="5" cols="48" required></textarea>
							</div>
							<button type="submit" class="btn btn-dark">Enviar</button>

						</form>
				</div>
		 	</div>
		</div>
</div>

</div>
</div>
<?php include("includes/footer.php"); ?>
</body>
</html>

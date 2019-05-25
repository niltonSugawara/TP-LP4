<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Museu dos Jogos</title>
</head>
<body>

	<div class="container-fluid">
		<div class="nav navbar-light" id="txtBase">
			<a class="navbar-brand font-weight-bold" href="#"> <img
				src="resources/game.png" width="50" height="50"
				class="d-inline-block" alt=""> Museu dos Jogos
			</a>
		</div>
		<!--navbar principal -->
		<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
			<div class="collapse navbar-collapse" id="navtxt">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item active"><a class="nav-link"
						href="plataformas.php">Plataformas</a></li>
					<li class="nav-item active"><a class="nav-link" href="games.php">Games</a>
					
					<li class="nav-item active"><a class="nav-link" href="sobre.php">Sobre</a>
					</li>
				</ul>
				<!--Modal do Login -->
				<a id="user" href="" class="btn btn-secondary text-primary" data-toggle="modal"
					data-target="#formModal">Entrar</a>
			</div>
			<div class="modal fade" id="formModal" tabindex="-1" role="dialog"
				aria-labelledby="modalform" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5>Login</h5>
							<button type="button" class="close" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<!--Corpo do Modal de Login -->
						<div class="modal-body">
							<form action="login.php" method="post">
								<div class="form-group">
									<label for="email">Email</label> <input type="email" name="email"
										class="form-control" id="email">
								</div>
								<div class="form-group">
									<label for="pwd">Senha</label> <input type="password" name="senha" 
										class="form-control" id="pwd">
								</div>
								<button type="submit" class="btn btn-dark">Entrar</button>

							</form>
							<br>
							<!--Link de criação de usuário -->
							<div class="modal-footer">
								<p>Não possui conta? <a href="cadastro.php"> Crie uma!</a></p>
								
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
	<br>
</body>
</html>

<div class="container-fluid">
    <div class="nav navbar-light" id="txtBase">
        <a class="navbar-brand font-weight-bold" href="#"> <img
            src="../resources/images/game.png" width="50" height="50"class="d-inline-block" alt=""> Museu dos Jogos
        </a>
    </div>
<!--navbar principal -->
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navtxt">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item active"><a class="nav-link" href="plataformas.php">Plataformas</a></li>
                <li class="nav-item active"><a class="nav-link" href="games.php">Games</a></li>
                <li class="nav-item active"><a class="nav-link" href="sobre.php">Sobre</a></li>
            </ul>
        <!--botão do Modal de Login -->
            <a id="user" href="" class="btn btn-secondary text-primary" data-toggle="modal" data-target="#formModal">Entrar</a>
        </div>
    <!--Começo do Modal de Login -->
        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="modalform" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Login</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <!--Corpo do Modal de Login -->
                    <div class="modal-body">
                        <form action="login.php" method="post">
                            <div class="form-group">
    	                       <label for="email">Email</label> <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
    	                       <label for="pwd">Senha</label> <input type="password" name="senha" class="form-control" id="pwd" required>
                            </div>
                            <button type="submit" class="btn btn-dark">Entrar</button>
                        </form><br>
                    <!--Link de criação de usuário -->
                        <div class="modal-footer">
                            <p>Não possui conta? <a id="user" href="" data-toggle="modal"data-target="#cadastroModal"> Crie uma!</a></p>
                        </div>
                        <div class="modal fade" id="cadastroModal" tabindex="-1" role="dialog" aria-labelledby="modalform" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Cadastro</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                    <!--Corpo do Modal de Login -->
                                    <div class="modal-body">
                                        <form action="registrar.php" method="post">
                                            <div  class="form-group" >
                                                <label>Nome</label><br><input type="text" name="nome">
                                            </div>
                                            <div  class="form-group" >
                                                <label>Sobrenome</label><br><input type="text" name="sobrenome">
                                            </div>
                                            <div  class="form-group" >
                                                <label>Data Nascimento</label><br><input type="date" name="">
                                            </div>
                                            <div  class="form-group" >
                                                <label>Sexo</label>
                                                <label><input type="radio" name="sexo" value="masculino"> Masculino</label>
                                                <label><input type="radio" name="sexo" value="feminino">Feminino</label>
                                                <label><input type="radio" name="sexo" value="outro">Outro</label>
                                            </div>
                                            <div  class="form-group" >
                                            <label>Endereço</label><br><input type="text" name="endereco">
                                            </div>
                                            <div  class="form-group" >
                                                <label>Tel(Cel)</label><br><input type="tel" name="telefone">
                                            </div>
                                            <input type="submit" name="cadastra" value="Enviar">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
    </nav>
<br>

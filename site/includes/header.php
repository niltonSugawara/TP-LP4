<?php  
session_start();
?> 
<div class="container-fluid">
    <div class="nav navbar-light" id="txtBase">
        <nav class="navbar-brand font-weight-bold" > <img
            src="../resources/images/spaceInvaders.gif" width="50" height="50" class="d-inline-block rounded-circle" alt=""> Museu dos Jogos
        </nav>
        <?php if(isset($_SESSION['username'])){?>  
                <div class="welcome">  
                        <a>Olá - <?php echo $_SESSION['username']; ?></a>
                </div>  
        <?php } else { echo "<a>Efetue o login.</a>";} ?> 
    </div>
<!--navbar principal -->
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navConteudo">
        <span class="navbar-toggler-icon"></span>        
        </button>
        <div class="collapse navbar-collapse" id="navConteudo">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item active"><a class="nav-link" href="plataformas.php">Plataformas</a></li>
                <li class="nav-item active"><a class="nav-link" href="games.php">Games</a></li>
            
            <?php if(isset($_SESSION['username'])){?>   
                <li class="nav-item active"><a class="nav-link" href="catalogar.php">Catálogo</a></li>
            <?php  } ?>    

                <li class="nav-item active"><a class="nav-link" href="sobre.php">Sobre</a></li>
            </ul>
        <!--botão do Modal de Login -->
        
            
            <?php if(isset($_SESSION['username'])){ ?>
                <a id="logout" href="" class="btn btn-secondary text-primary">Sair</a>
            <?php } else {?>
                <a id="user" href="" class="btn btn-secondary text-primary" data-toggle="modal" data-target="#formModal">Entrar</a>
             <?php } ?>  
            
            <!--<a id="user" href="" class="btn btn-secondary text-primary" data-toggle="modal" data-target="#formModal">Entrar</a>-->
        
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
                        <!--<form action="includes/login.php" method="get">-->
                            <div class="form-group">
                               <label for="email">Email</label> <input type="email" name="email" class="form-control" id="email"  required>
                            </div>
                            <div class="form-group">
                               <label for="password">Senha</label> <input type="password" name="password" class="form-control" id="password"  required>
                            </div>
                            <button type="submit" id="login_button" class="btn btn-dark">Entrar</button>
                        <!--</form>-->
                            <br>
                    <!--Link de criação de usuário -->
                        <div class="modal-footer">
                            <p>Não possui conta? <a id="user" href="" data-toggle="modal" data-target="#cadastroModal"> Crie uma!</a></p>
                        </div>
                        <!-- Modal do Cadastro -->
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
                                        
                                        <form action="../control/create/createUser.php" method="post">
                                            
                                            <div  class="form-group" >
                                                <label>Nome</label><br><input type="text" id="nome" name="nome" required>
                                            </div>
                                            <div  class="form-group" >
                                                <label>Sobrenome</label><br><input type="text" id="sobrenome" name="sobrenome" required>
                                            </div>
                                            <div  class="form-group" >
                                            <label>Endereço</label><br><input type="text" id="endereco" name="endereco">
                                            </div>
                                            <div  class="form-group" >
                                                <label>Tel(Cel)</label><br><input type="text" id="telefone" name="telefone">
                                            </div>
                                            <div>
                                                <label>E-mail</label><br><input type="text" id="email_cadastro" name="email_cadastro" required>
                                            </div>
                                            <div>
                                                <label>Senha</label><br><input type="password" id="senha" name="senha" required>
                                            </div>
                                            <input  type="submit" name="cadastrar" id="cadastro_id" class="btn btn-dark" value="Enviar">
                                           
                                        </form>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
              </div>
          </div>
      </div>         
  </nav>

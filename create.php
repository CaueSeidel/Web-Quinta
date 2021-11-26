<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <title>Document</title>
    
    <style>
      body {
  margin: 0;
  padding: 0;
  background-color: #010708;
  height: 100vh;
}
#criar .container #criar-row #criar-column #criar-box {
  margin-top: 60px;
  max-width: 600px;
  height: 600px;
  border: 1px solid #aa5f5f;
  background-color: #363636;
}
#criar .container #criar-row #criar-column #criar-box #criar-form {
  padding: 20px;
}

#criar .container #criar-row #criar-column #criar-box #criar-form #login-link {
  margin-top: -50px;
}
    </style>

</head>
<body>
        <div id="criar">

            <div class="container">

                <div id="criar-row" class="row justify-content-center align-items-center">

                    <div id="criar-column" class="col-md-6">

                        <div id="criar-box" class="col-md-12">

                            <form id="criar-form" class="form" action="" method="POST">
                                <h3 class="text-center text-info">Criação de conta</h3>
                                <div class="form-group">
                                    <label for="nome" class="text-info">Primeiro nome</label><br>
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                                </div>

                                <div class="form-group">
                                    <label for="sobrenome" class="text-info">Sobrenome</label><br>
                                    <input type="text" class="form-control" name="sobrenome" id="nome" placeholder="Sobrenome" required>
                                </div>

                                <div class="form-group">
                                    <label for="date" class="text-info">Data de nascimento</label><br>
                                    <input type="date" class="form-control" name="date" id="Nascimento"  required>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="text-info">Senha</label><br>
                                    <input type="password" class="form-control" name="senha" id="password" placeholder="Senha" required>
                                </div>

                                <div class="form-group">
                                    <label for="confirm-password" class="text-info">Confirmar Senha</label><br>
                                    <input type="password" class="form-control" name="confirm-senha" id="confirm-password" placeholder="Confirmar Senha" required>
                                </div>

                                <label for="remember-me" class="text-info"><span>Não sou um robô</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            

                                <div class="form-group">
                                    <input type="submit" class="btn btn-info btn-md" name="submit" id="submit" value="Cadastrar">
                                    
                                    
                                    

                                </div>
                                <div id="login-link"  class="text-right">
                                    <p class="text-right"><a href="login.php">Já sou cadastrado</a></p>
                                </div>

                                


                            </form>


                        </div>

                    </div>

                </div>

            </div>

        </div>


</body>
</html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cronograma COLTEC</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container-fluid">
        <div id="container_login" class="align-self-center col-xl-4 offset-xl-4 col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-4 offset-sm-4 col-12 ">
            <div id="login_box" class="row">
                <div id="bienvenido" class="d-flex justify-content-center col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>Faça seu login</h2>
                </div>             
                <div id="formulario" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="login" name="login_p" placeholder="Login">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="senha" name="senha_p" placeholder="senha">
                        </div>
                    </form>
                </div>
                <div id="buttons_box" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Entrar</button>
                    <button type="button" class="btn btn-success btn-lg btn-block">Cadastrar-se</button>
                </div>        
            </div>     
        </div>
    </div>

</body>
</html>
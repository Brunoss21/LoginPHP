<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-color: #F2F2F2;
        }
        .login{
            width: 100%;
            height: 100vh;
            align-items: center;
            justinfy-content: center;
            display: flex;
        }
        .register-link {
        color: #3498db; 
        text-decoration: none;
        font-weight: bold; 
        font-size: 16px; 
        transition: color 0.3s ease; 
        }

        .register-link:hover {
        color: #2ecc71; 
        text-decoration: underline; 
        }

    </style>
</head>
<body>
<div class="login">
    <div class="container">
        <div class="col-lg-4 offset-lg-4">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h3 class="text-center">Acesso Restrito</h3>
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="usuario">Usuário</label>
                            <input type="text" name="usuario" class="form-control" id="usuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" class="form-control" id="senha" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100">Entrar</button>
                        </div>
                    </form>
                    <p class="text-center">
                        <a href="cadastro.php" class="register-link">Não tem conta? Cadastre-se</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
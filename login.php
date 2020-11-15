<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/styleLogin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <a class="links" id="cadastro"></a>
        <a class="links" id="login"></a>

        <div class="content">
            <!--Aqui ficará as tags do formulário de login-->
            <div id="login">
                <form method="POST" action="processaDados.php">
                    <!--Quando o Back End estiver pronto a ação será buscar nele o login e a senha-->
                    <h1>Login</h1>
                    <p>
                        <label for="email_usuario">Usuário</label>
                        <input id="email_usuario" name="nome_usuario" required="required" type="email" placeholder="Usuário">
                    </p>
                    <p>
                        <label for="senha">Senha</label>
                        <input id="senha" name="senha" required="required" type="password" placeholder="Senha" />
                    </p>

                    <p>
                        <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
                        <label for="manterlogado">Manter-me logado</label>
                    </p>
                    <p>
                        <input type="submit" value="Logar">
                    </p>
                    <p class="link">
                        Ainda não é cadastrado?
                        <a href="cadastro.php">Cadastre-se</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/styleLogin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!--Aqui ficará as tags do formulário de login-->
    <div id="corpo-form">
        <h1>Login</h1>
        <form method="POST" action="processaDados.php">
            <!--Quando o Back End estiver pronto a ação será buscar nele o login e a senha-->
            <input id="email_usuario" name="nome_usuario" required="required" type="email" placeholder="Usuário" />
            <input id="senha" name="senha" required="required" type="password" placeholder="Senha" />
            <input id="submit" type="submit" name="logar" value="logar" />
            Ainda não é cadastrado?
            <a href="cadastro.php"><strong>Cadastre-se</strong></a>
        </form>
    </div>

</body>

</html>
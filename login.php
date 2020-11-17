<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<!-- Esse trecho de código é responsável por atacar o body da tela de login -->
<style>
    body{
    background-image: url("../img/img-login-02.jpg");
    position: relative;
    height: 80vh;
    width: 80vw;
    background-size: cover;
    color: orangered;
    text-align: center;
}

</style>

<body>
    <!--Aqui está os inputs do formulário de login-->
    <div id="corpo-form">
        <h1>Login</h1>
        <form method="POST" action="processaDados.php">
            <!--Quando o Back End estiver pronto a ação será buscar nele o login e a senha, ou seja, no documento processaDados.php-->
            <input id="email_usuario" name="nome_usuario" required="required" type="email" placeholder="Usuário" />
            <input id="senha" name="senha" required="required" type="password" placeholder="Senha" />
            <input id="submit" type="submit" name="logar" value="logar" />
            Ainda não é cadastrado?
            <a href="cadastro.php"><strong>Cadastre-se</strong></a>
        </form>
    </div>

</body>

</html>
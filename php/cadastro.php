<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Pagina interna</title>
</head>

<!-- Esse trecho de código é responsável por atacar o body da tela de cadastro -->
<style>
    body {
        background-image: url("../img/img-login-02.jpg");
        position: relative;
        height: 109vh;
        width: 40vw;
        background-size: cover;
        color: orangered;
        text-align: center;
    }
</style>

<body>
    <h1>Cadastro</h1>
    <form method="POST" action="processaDados.php">
        <!--Aqui está os inputs do formulário de cadastro-->
        <div id="corpo-form-cad">
            <input id="primeiro_nome" name="primeiro_nome" require="required" type="text" placeholder="Digite seu primeito nome" maxlength="15" />
            <input id="ultimo_nome" name="ultimo_nome" require="required" type="text" placeholder="Digite seu último nome" maxlength="20" />
            <input id="email" name="email" require="required" type="email" placeholder="Digite seu e-mail" maxlength="30" />
            <input id="numero_celular" name="numero_celular" require="required" type="tel" pattern="{2} \d{5} \d{4}" placeholder="Ex: 41 99999 9999" max="15" />
            <input id="nome_usuario" name="nome_usuario" required="required" type="text" placeholder="Escolha um nome de usuário" />
            <input id="senha" name="senha" required="required" type="password" placeholder="Digite uma senha de no máx 10 caracteres" maxlength="10"/>
            <input id="confere_senha" name="confere_senha" require="required" type="password" placeholder="Repita a senha" maxlength="10"/>
            <input type="submit" value="cadastrar" />
            <strong>OU</strong>
            <p>
                <a href="login.php"><strong>Voltar ao login</strong></a> <!-- essa ancora permite voltar ao login -->
            </p>
    </form>
    </div>

</body>

</html>
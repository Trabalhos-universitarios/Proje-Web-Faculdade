<?php
    require_once '../../backEnd/usuarios.php';
    $user = new usuario();

    define('host_name', 'localhost');
    define('host_user', 'root');
    define('host_pwd', "");
    define('db_name', 'projeto_borrowbag');
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<!-- Esse trecho de código é responsável por atacar o body da tela de login -->
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
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
        <form method="POST">
            <!--Quando o Back End estiver pronto a ação será buscar nele o login e a senha, ou seja, no documento processaDados.php-->
            <input id="email" name="email" required="required" type="email" placeholder="E-mail" />
            <input id="senha" name="senha" required="required" type="password" placeholder="Senha" />
            <input id="submit" name="logar" type="submit" value="Acessar" />
            <strong> Ainda não é cadastrado? </strong>
            <a href="cadastro.php"><strong>Cadastre-se</strong></a>
        </form>
    </div>

    <?php
    if(isset($_POST['email']))
    {
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if (!empty($email) && !empty($senha)) {
        $user -> conectar(db_name, host_name,host_user,host_pwd);
        if ($user -> msgErro == ""){
            if($user -> logar($email, $senha)){
                header("location: paginaPrincipal.php");
            } else {
                ?>
                <div class="msg-erro" style="color: red;"><strong> E-mail ou senha não conferem </strong></div>
            <?php
            }
        } else {
            ?>
            <div class="msg-erro">
                <?php
                echo "ERRO: " . $user -> msgErro;
                ?>
            </div>
        <?php
        }

    }else {
        ?>
        <div class="msg-erro"> Por gentileza. Preencha os dois campos </div>
    <?php
        }
    }
    ?>

</body>

</html>
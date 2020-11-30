<?php
require_once '../backEnd/usuarios.php';
$user = new usuario();

define('host_name', 'localhost');
define('host_user', 'root');
define('host_pwd', "");
define('db_name', 'projeto_borrowbag');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../frontEnd/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cadastro administrador</title>
</head>

<!-- Esse trecho de código é responsável por atacar o body da tela de cadastro -->
<style>
    div#corpo-form-cad input {
        display: block;
        height: 30px;
        width: 400px;
        margin: 10px;
        border-radius: 30px;
        border: 1px solid orangered;
        font-size: 12pt;
        padding: 16px 20px;
        background-color: rgba(255, 255, 255, 0.01);
        color: black;
        outline: none;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: url("../frontEnd/img/fundoTelaAdmin.jpg");
        position: relative;
        height: 109vh;
        width: 40vw;
        background-size: cover;
        color: orangered;
        text-align: center;
    }

    h1 {
        color: black;
    }

    /*ATACANDO OS PLACEHOLDERS PARA MUDAR SUAS CORES*/
    ::-webkit-input-placeholder {
        color: black;
    }

    :-moz-placeholder {
        color: black;
    }

    ::-moz-placeholder {
        color: black;
    }

    :-ms-input-placeholder {
        color: black;
    }
</style>

<body>
    <h1>Cadastro Administrador</h1>
    <form method="POST">
        <!--Aqui está os inputs do formulário de cadastro-->
        <div id="corpo-form-cad">
            <input id="cargo" name="cargo" require="required" type="text" placeholder="Digite seu cargo" maxlength="30" />
            <input id="nome" name="nome" require="required" type="text" placeholder="Digite seu nome" maxlength="10" />
            <input id="CPF" name="CPF" require="required" type="text" placeholder="Dgite seu CPF" maxlength="15">
            <input id="telefone" name="telefone" require="required" type="tel" placeholder="Telefone" max="15" />
            <input id="email" name="email" require="required" type="email" placeholder="Digite seu e-mail" maxlength="30" />
            <input id="senha" name="senha" required="required" type="password" placeholder="Digite uma senha de no máx 10 caracteres" maxlength="10" />
            <input id="confere_senha" name="confere_senha" require="required" type="password" placeholder="Repita a senha" maxlength="10" />
            <input type="submit" value="Cadastrar" />
            <strong>OU</strong>
            <p>
                <a href="loginAdmin.php"><strong>Voltar ao login</strong></a> <!-- essa ancora permite voltar ao login -->
            </p>
        </div>
    </form>


    <?php
    if (isset($_POST['nome'])) {
        $cargo = addslashes($_POST['cargo']);
        $nome = addslashes($_POST['nome']);
        $CPF = addslashes($_POST['CPF']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confere_Senha = addslashes($_POST['confere_senha']);

        if (!empty($cargo) && !empty($nome) && !empty($CPF) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confere_Senha)) {
            $user->conectar("projeto_borrowbag", "localhost", "root", "");
            if ($user -> msgErro == "") {
                if ($senha == $confere_Senha) {
                    if ($user->cadastrarAdmin($cargo, $nome, $CPF, $telefone, $email, $senha, $confere_Senha)) {
    ?>
                        <div id="msg-sucesso" style="color: green;"><strong>E-mail cadastrado com sucesso!</strong></div>
                    <?php
                    } else {
                    ?>
                        <div class="msg-erro" style="color: yellow;"><strong> Este email já foi usado!</strong></div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="msg-erro" style="color: red;"><strong> As senhas não são idênticas! </strong></div>
                <?php
                }
            } else {
                ?>
                <div class="msg-erro" style="color: red;">
                    <?php echo "ERRO: " . $user->$msgErro; ?>
                </div>
            <?php
            }
        } else {
            ?>
            <div class="msg-erro" style="color: red;"><strong> "Por gentileza. Preencha todos os campos!" </strong> </div>
    <?php
        }
    }
    ?>

</body>

</html>
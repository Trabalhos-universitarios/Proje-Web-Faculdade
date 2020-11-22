<?php
    require_once '../../backEnd/usuarios.php';
    $user = new usuario();

    define('host_name', 'localhost');
    define('host_user', 'root');
    define('host_pwd', "");
    ?>
    
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="../css/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Cadastro</title>
    </head>

    <!-- Esse trecho de código é responsável por atacar o body da tela de cadastro -->
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
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
        <form method="POST">
            <!--Aqui está os inputs do formulário de cadastro-->
            <div id="corpo-form-cad">
                <input id="primeiro_nome" name="primeiro_nome" require="required" type="text" placeholder="Digite seu primeito nome" maxlength="15" />
                <input id="ultimo_nome" name="ultimo_nome" require="required" type="text" placeholder="Digite seu último nome" maxlength="20" />
                <input id="email" name="email" require="required" type="email" placeholder="Digite seu e-mail" maxlength="30" />
                <input id="telefone" name="telefone" require="required" type="tel" placeholder="Telefone" max="15" />
                <input id="senha" name="senha" required="required" type="password" placeholder="Digite uma senha de no máx 10 caracteres" maxlength="10" />
                <input id="confere_senha" name="confere_senha" require="required" type="password" placeholder="Repita a senha" maxlength="10" />
                <input type="submit" value="cadastrar" />
                <strong>OU</strong>
                <p>
                    <a href="login.php"><strong>Voltar ao login</strong></a> <!-- essa ancora permite voltar ao login -->
                </p>
        </form>
        </div>

        <?php
        if (isset($_POST['primeiro_nome'])) {
            $primeiro_nome = addslashes($_POST['primeiro_nome']);
            $ultimo_nome = addslashes($_POST['ultimo_nome']);
            $email = addslashes($_POST['email']);
            $telefone = addslashes($_POST['telefone']);
            $senha = addslashes($_POST['senha']);
            $confere_Senha = addslashes($_POST['confere_senha']);

            if (!empty($primeiro_nome) && !empty($ultimo_nome) && !empty($email) && !empty($telefone) && !empty($senha) && !empty($confere_Senha)) {
                $user->conectar(db_name, host_name, host_user, host_pwd);
                if ($user->msgErro == "") {
                    if ($senha == $confere_Senha) {
                        if ($user->cadastrar($primeiro_nome, $ultimo_nome, $email, $telefone, $senha, $confere_Senha)) {
        ?>
                            <div id="msg-sucesso" style="color: green;"><strong>E-mail cadastrado com sucesso!</strong></div>
                        <?php
                        } else {
                        ?>
                            <div class="msg-erro" style="color: yellow;"><strong> Este email já foi usado</strong></div>
                        <?php
                        }
                    } else {
                        ?>
                        <div class="msg-erro" style="color: red;"><strong> As senhas não são iguais </strong></div>
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
                <div class="msg-erro"> "Por gentileza. Preencha todos os campos." </div>
        <?php
            }
        }
        ?>

    </body>

    </html>
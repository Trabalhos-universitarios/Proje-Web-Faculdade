<?php
require_once '../backEnd/usuarios.php';
$prod = new usuario();

define('host_name', 'localhost');
define('host_user', 'root');
define('host_pwd', "");
define('db_name', 'projeto_borrowbag');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>

<body>
    <h2>Inserir produto no estoque</h2><br>
    <form method="POST">
        <div id="insere">
            <label>Data de inserção</label>
            <input id="dataInsercao" type="date" require="required" placeholder="Data da inserção">

        </div>
        <div id="tamanhoBags">
            <br>
            <h4>Tamanho da bagagem</h4>
            <p><input id="tamanhoBag" type="radio" value="GG"><strong>GG</strong><input id="quantidadeGG" type="number" placeholder="Quantidade"></p>
            <p><input id="tamanhoBag" type="radio" value="G"><strong>G</strong><input id="quantidadeGG" type="number" placeholder="Quantidade"></p>
            <p><input id="tamanhoBag" type="radio" value="M"><strong>M</strong><input id="quantidadeGG" type="number" placeholder="Quantidade"></p>
            <p><input id="tamanhoBag" type="radio" value="P"><strong>P</strong><input id="quantidadeGG" type="number" placeholder="Quantidade"></p>
            <p><input id="tamanhoBag" type="radio" value="PP"><strong>PP</strong><input id="quantidadeGG" type="number" placeholder="Quantidade"></p>
        </div>

        <div id="insereProd">
            <input id="insereProd" type="submit" value="Inserir">
        </div>
    </form>
    <?php
    if (isset($_POST['data'])) {
        $data($_POST['data']);
        $tamanho = addslashes($_POST['tamanho']);
        $quantidade = addslashes($_POST['quantidade']);

        if (!empty($data) && !empty($tamanho) && !empty($quantidade)) {
            $prod->conectar(db_name, host_name, host_user, host_pwd);
            if ($prod->msgErro == "") {
                if ($prod->cadastrarProd($data, $tamanho, $quantidade)) {
    ?>
                    <div id="msg-sucesso" style="color: green;"><strong>Produto cadastrado com sucesso!</strong></div>
            <?php
                }
            }
        } else {
            ?>
            <div class="msg-erro" style="color: red;">
                <?php echo "ERRO: " . $prod->$msgErro; ?>
            </div>
        <?php
        }
    } else {
        ?>
        <div class="msg-erro" style="color: red;"><strong> "Por gentileza. Preencha todos os campos!" </strong> </div>
    <?php
    }

    ?>

</body>

</html>
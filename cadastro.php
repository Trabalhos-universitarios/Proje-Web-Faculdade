<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/styleCadastro.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Pagina interna</title>
</head>

<body>
    <div id="cadastro">
        <form method="POST" action="">
            <!--Quando o Back End estiver pronto a ação será cadastrar nele os dados do visitante-->
            <h1>Cadastro</h1>

            <h4>Dados pessoais:</h4>
            <p>
                <label for="primeiro_nome_cadastro">Primeiro nome</label>
                <input id="primeiro_nome_cadastro" name="primeiro_nome_cadastro" required="required" type="text"
                    placeholder="Digite seu primeiro nome...">
            </p>
            <p>
                <label for="ultimo_nome_cadastro">Último nome</label>
                <input id="ultimo_nome_cadastro" name="ultimo_nome_cadastro" required="required" type="text"
                    placeholder="Digite seu último nome...">
            </p>
            <p>
                <label for="email_cadastro">E-mail</label>
                <input id="email_cadastro" name="email_cadastro" required="required" type="email"
                    placeholder="Digite seu e-mail...">
            </p>
            <p>
                <label for="telefone_cadastro">Telefone com DDD</label>
                <input id="telefone_cadastro" name="telefone_cadastro" required="required" type="tel"
                    pattern="\d{2} \d{5}-\d{4}" placeholder="Ex: 41 99999-9999">
            </p>
            <p>
                <h4>Endereço:</h4>
                <label for="cep_cadastro">CEP</label>
                <input id="cep_cadastro" name="cep_cadastro" required="required" type="number"
                    placeholder="Digite seu CEP">
            </p>
            <p>
                <label for="logradouro_cadastro">Logradouro</label>
                <input id="logradouro_cadastro" name="logradouro_cadastro" required="required" type="text"
                    placeholder="Ex: Rua, Av Etc...">
            </p>
            <p>
                <label for="complemento_cadastro">Complemento</label>
                <input id="complemento_cadastro" name="complemento_cadastro" required="required" type="text"
                    placeholder="Ex: casa, apartamento, Etc...">
            </p>
            <p>
                <label for="numero_casa_cadastro">Número</label>
                <input id="numero_casa_cadastro" name="numero_casa_cadastro" required="required" type="number" placeholder="Digite o número da residência">
            </p>
            <p>
                <label for="bairro_cadastro">Bairro</label>
                <input id="bairro_cadastro" name="bairro_cadastro" required="required" type="text"
                    placeholder="Digite o bairro onde reside...">
            </p>
            <p>
                <label for="cidade_cadastro">Cidade</label>
                <input id="cidade_cadastro" name="cidade_cadastro" required="required" type="text"
                    placeholder="Digite a cidade onde mora">
            </p>
            <p>
                <label for="estado_cadastro">Estado</label>
                <input id="estado_cadastro" name="estado_cadastro" required="required" type="text"
                    placeholder="Digite o estado onde mora">
            </p>
            <p>
                <label for="pais_cadastro">País</label>
                <input id="pais_cadastro" name="pais_cadastro" required="required" type="text"
                    placeholder="Digite o país onde mora">
            </p>
            <p>
                <h4>Criar Senha:</h4>
                <form action="confereSenha.php" method="POST">
                    <label for="senha_cadastro">Senha</label>
                    <input id="senha_cadastro" name="senha_cadastro" required="required" type="password"
                        placeholder="Digite a senha">
            </p>
            <p>
                <label for="confirma_senha_cadastro">Confirmar Senha</label>
                <input id="confirma_senha_cadastro" name="confirma_senha_cadastro" required="required" type="password"
                    placeholder="Confirmar senha">
            </p>
            <p>
                <input type="submit" value="cadastrar"/>
            </p>
            OU
            <p>
                <a href="login.php">Voltar ao login</a>
            </p>
        </form>
    </div>
</body>

</html>
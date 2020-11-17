<?php

class usuario {
    private $pdo;
    public $msgError = "";
    public function connect($nome, $host, $usuario, $senha) { /** Parâmetros exigidos no PDO */
        global $pdo;
        global $msgError;
        try {
            $pdo = new PDO("mySql:dbname=".$nome.";host=".$host,$usuario,$senha);
        } catch (PDOException $e) {
            $msgError = $e->getMessage();
        }
        

    }
    public function register($primeiro_nome, $ultimo_nome, $email, $numero_celular, $nome_usuario, $senha) {
        global $pdo;
        /**Verificar se já existe usuário cadastrado */
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if($sql->rowCount() > 0) { // verifica se na linha do id tem algim numero, ou seja, se o usuário já está cadastrado
            return false; // Já está cadsastrado, por isso retorna falso
        }
        else{
            /**Cadstrar usuário */
            $sql = $pdo->prepare("INSERT INTO usuarios(primeiro_nome, ultimo_nome, email, telefone, senha) 
            VALUES (:pn, :un, :e, :t, s)");
            $sql->bindValue(":pn", $primeiro_nome);
            $sql->bindValue(":un", $ultimo_nome);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":t", $numero_celular);
            $sql->bindValue(":s", $senha);
            $sql->execute();
            return true;

        }

        

    }
    public function log_into($nome_usuario, $senha) {
        global $pdo;

    }
}

?>
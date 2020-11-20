<?php

Class usuario
{
    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha){
        global $pdo;
        global $msgErro;

        try{
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $usuario,$senha);
        } catch (PDOException $e){
            $msgErro = $e -> getMessage();
        }
    }

    public function cadastrar($primeiro_nome, $ultimo_nome, $email, $telefone, $senha){
        global $pdo;
        //verificação
        $sql = $pdo -> prepare("SELECT id_usuarios FROM usuarios WHERE email = :e");
        $sql -> bindValue(":e", $email);
        $sql -> execute();
        if ($sql -> rowCount() > 0){
            return false;
        } else {
            //cadastro
            $sql = $pdo -> prepare("INSERT INTO usuarios (primeiro_nome, ultimo_nome, email, telefone, senha) VALUES(:pn, :un, :e, :t, :s)");
            $sql -> bindValue(":pn", $primeiro_nome);
            $sql -> bindValue(":un", $ultimo_nome);
            $sql -> bindValue(":e", $email);
            $sql -> bindValue(":t", $telefone);
            $sql -> bindValue(":s", md5($senha));

            $sql -> execute();
            return true;
        }

    }

    public function logar($email, $senha){
        global $pdo;

        // verificação
        $sql = $pdo -> prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND  senha = :s");
        $sql -> bindValue(":e", $email);
        $sql -> bindValue(":s", md5($senha));
        $sql -> execute();

        if ($sql -> rowCount() > 0){
            //iniciar sessão
            $info = $sql -> fetch();
            session_start();
            $_SESSION['id_usuario'] = $info['id_usuario'];
            return true;
        } else {
            return false;
        }

    }
}
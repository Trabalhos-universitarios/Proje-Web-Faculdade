<?php

class admin{
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

    public function cadastrar($cargo, $nome, $CPF, $telefone, $email, $senha){
        global $pdo;
        //verificação
        $sql = $pdo -> prepare("SELECT id_admin FROM administradores WHERE email = :e");
        $sql -> bindValue(":e", $email);
        $sql -> execute();
        if ($sql -> rowCount() > 0){
            return false;
        } else {
            //cadastro
            $sql = $pdo -> prepare("INSERT INTO administradores ($cargo, $nome, $CPF, $telefone, $email, $senha) VALUES(:c, :n, :cp, :t, :e, :s)");
            $sql -> bindValue(":c", $cargo);
            $sql -> bindValue(":n", $nome);
            $sql -> bindValue(":cp", $CPF);
            $sql -> bindValue(":t", $telefone);
            $sql -> bindValue(":e", $email);
            $sql -> bindValue(":s", md5($senha));
    
            $sql -> execute();
            return true;
        }
    
    }
    
    public function logar($email, $senha){
        global $pdo;
    
        // verificação
        $sql = $pdo -> prepare("SELECT id_admin FROM administradores WHERE email = :e AND  senha = :s");
        $sql -> bindValue(":e", $email);
        $sql -> bindValue(":s", md5($senha));
        $sql -> execute();
    
        if ($sql -> rowCount() > 0){
            //iniciar sessão
            $dado = $sql -> fetch();
            session_start();
            $_SESSION['id_admin'] = $dado['id_admin'];
            return true;
        } else {
            return false;
        }
    }
}



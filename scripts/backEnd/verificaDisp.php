<?php
    require_once 'usuarios.php';
    $user = new usuario();

    define('host_name', 'localhost');
    define('host_user', 'root');
    define('host_pwd', "");
    define('db_name', 'projeto_borrowbag');


    class verificarDisp {
    private $pdo;
    public function verificarDisp($quantidade) {
        global $pdo;
        $sql = $pdo->prepare("SELECT quantidade FROM estoque");
        if($sql->rowCount()>0) {
            return true;
            echo "Bagagem alugada com sucesso!";
            $sql->$_POST("UPDATE quantidade from estoque where quantidade = -1");
        }
        else {
            return false;
            echo "Que pena, nao temos mais esse modelo disponível!";

        }
    }
}

echo "Essa parte do código era responsável por verificar na base de dados se o produto está em estoque ou não,
porém, não consegui fazer por falta de conhecimento na linguagem PHP, tendo em vista que não estudamos 
praticamente nada da linguagem para um problema tão complexo"
    
?>

<?php
    require_once '../../backEnd/usuarios.php';
    $user = new usuario();

    define('host_name', 'localhost');
    define('host_user', 'root');
    define('host_pwd', "");
    define('db_name', 'projeto_borrowbag');


    class verificarDisp {
    private $pdo;
    public function verificarDisp($quant_estoque) {
        global $pdo;
        $sql = $pdo->prepare("SELECT quant_produto FROM estoque");
        if($sql->rowCount()>0) {
            return true;
            echo "Bagagem alugada com sucesso!";
            $sql->$_POST("UPDATE quant_produtos from estoque where quant_produtos = -1");
        }
        else {
            return false;
            echo "Que pena, nao temos mais esse modelo disponível!";

        }
    }
}
    
?>

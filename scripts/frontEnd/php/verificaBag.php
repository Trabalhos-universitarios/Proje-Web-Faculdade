<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/styleForms.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Escolha as datas de locação e devolução da(s) bagagem(ns):</h2><br>
    <div id="datas">
    <form method="$_POST">
        <label>Data de locação</label>
        <input id="dataLocacao" type="date" require="required" placeholder="Data do empréstimo...">
        <label>Data de devolução</label>
        <input id="dataDevolucao" type="date" require="required" placeholder="Data da devolução...">
    </form>
    </div>
    <div id="verifica">
    <form id="verificaDisp" name="verificaDisp" method="$_POST" action="../../backEnd/verificaDisp.php">
        <input id="verificaDisp" type="submit" value="Verificar">
    </form>
    </div>
</body>
</html>
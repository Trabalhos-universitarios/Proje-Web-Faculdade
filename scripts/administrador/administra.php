<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../frontEnd/css/styleForms.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input {
        cursor: pointer;
        height: 25px;
        width: 100px;
        background-color: orangered;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 30px;
        position: absolute;
        margin: 30px 45%;
    }
    h2{
        background-color: orangered;
        color: white;
    }

    input[type=submit]:hover {
        text-decoration: underline;
        background-color: white;
        color: orangered;
        border: 1px solid orangered;
    }

    input[type=submit].active {
        background-color: orangered;
        background-color: white;

    }
</style>

<body>
    <h2>Vamos cadastrar alguns produtos novos?</h2>

    <form method="$_POST" action="cadastroProd.php">
        <input id="cadstrarProd" name="cadastrarProd" type="submit" value="Cadastrar">
    </form>
</body>

</html>
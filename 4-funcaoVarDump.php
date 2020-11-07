<?php

echo '<p><h3>Função var_dump</h3></p>';
echo '<p>
        A função var_dump do PHP é muito utilizada para depuração do código de programação, 
        pois mostra o conteúdo de uma variável, acompanhe:
        <li>Se for um array, ela exibe todo o array de uma forma estruturada</li>
        <li>se for uma variável simples, ela exibe seu valor</li>
        <li>se for um objeto, ela exibe todos os campos</li>
        Vejamos alguns exemplos utilizando o var_dump:
      </p>';
'<br>';

echo '<p><h3>Exemplo com array</h3></p>';
$a = array (3, 5, array ("aaa", "bbb", "ccc"));
var_dump($a);

echo '<p><h3>Exemplo com variável double e boolean</h3></p>';
$preco = 10.75;
$barato = false;
var_dump($preco, $barato);

?>
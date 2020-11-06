<?php
echo "O PHP é uma linguagen de programação de tipagem fraca, ou seja, é o próprio PHP que se encarrega 
de alterar os tipos de dados da variável quando for necessário, vejamos um exemplo a seguir:";
echo "<br>";
$var = 'text';
echo "Agora a variável var é: " . gettype($var);
echo "<br>";
$var = 123;
echo "Agora a variável var é: " . gettype($var);
echo "<br>";
$var = 10.0;
echo "Agora a variável var é: " . gettype($var);
echo "<br>";
echo "<p>Quando o nome da variável for identificado entre chaves {}, o PHP fará a leitura do que está dentro
 das chaves, por exemplo:";
${123} = 'abc';
echo "<p><li>".${'123'};
echo "<p>
        Além das variáveis definidas pelo desenvolvedor, o PHP oferece variáveis nativas, que são 
        chamadas de superglobais, pois estão disponíveis em qualquer parte do código. Vejamos a apresentação
        delas a seguir:";
echo "<p>
        <li>
        GLOBALS: contém todas as variáveis que estão disponíveis no escopo global, na forma de um array que contém
        as referências das variáveis que são chaves do array.
      <p> 
      <li>
        _SERVER: contém informações do servidor e do ambiente de execução.
      <p>
      <li>
        _GET: contém um array associativo de variáveis passadas para o script atual via método HTTP GET.
        Oque for enviado pelo formulário será mostrado na barra de endereços do navegador.
      <p>
      <li>
        _POST: contém um array associativo de variáveis passados para o script atual via método HTTP POST.
        Oque for enviado pelo formulário não será mostrado na barra de endereços do navegador.
      <p>
      <li>
        _FILES: contém um array associativo de itens com informações relativas aos arquivos enviados via HTTP,
        que é enviado por meio do script atual pelo método HTTP POST.
      <p>
      <li>
        _COOKIE: contém um array associativo de variáveis passadas para o script atual via HTTP COOKIES.
      <p>
      <li>
        _SESSION: contém um array associativo com variáveis de sessão disponíveis pára o atual script.
      <p>
      <li>
        _REQUEST: contém um array associativo com as variáveis de _GET, _POST, _COOKIE.
      <p>
      <li>
        _ENV: contém um array associativo com variáveis passadas para o script atual via método do ambiente.
        Na internet, equivale ao _SERVER.


        "
    

?>
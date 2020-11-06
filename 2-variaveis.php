<?php
echo "O PHP é uma linguagen de programação de tipagem fraca, ou seja, é o próprio PHP que se encarrega 
de alterar os tipos de dados da variável quando for necessário, vejamos um exemplo a seguir:";

$var = 'text';
echo "Agora a variável var é: " . gettype($var);
echo "<br>";
$var = 123;
echo "Agora a variável var é: " . gettype($var);
echo "<br>";
$var = 10.0;
echo "Agora a variável var" . gettype($var);

?>
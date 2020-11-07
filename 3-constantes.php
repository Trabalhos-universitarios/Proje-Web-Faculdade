<?php

echo '<p><h3>Constantes</h3><p>';
echo '<p>As constantes são diferentes das variáveis porque conservam seu valor de inicialização durante toda a execução
do programa, vejamos algunbs exemplos de constantes a seguir:
      </p>';

define('saudacao', 'Hello my friend, how are you today?');   
echo '<p><li>'.saudacao.'</li></p>';
const saudacao2 = 'Hello my best friend, are you happy today?';
echo '<p><li>'.saudacao2.'</li></p>';


?>
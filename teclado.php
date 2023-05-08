<?php
$alor=fopen('php://stdin','r');

//$valor =trim(fgets(STDIN));
$valor=fgets($alor);

$arquivo=fopen('novoTeste.txt','a');
fwrite($arquivo,$valor);
fclose($arquivo);
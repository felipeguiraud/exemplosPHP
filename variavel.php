<?php

$modelo1 = 'Texto 1';
//$matriz = array ();
$matriz = ['cidade' => 'curitiba'];

echo 'teste';
echo '<hr>';
echo $modelo1;
echo '<hr>';
print_r($matriz);
echo '<hr>';
var_dump($matriz);
echo '<hr>';
echo $matriz['cidade'];

//

echo '<hr>';
echo '<pre>';
print_r($_SERVER);
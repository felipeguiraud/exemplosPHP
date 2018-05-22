<?php

/*

  (int), (integer) - converte para inteiro
  (bool), (boolean) - converte para booleano
  (float), (double), (real) - converte para float
  (string) - converte para string
  (array) - converte para array
  (object) - converte para objeto
 */
$float = (int) 10.9;

var_dump($float);

echo '<br>';

$float2 = (int) 10.1;

var_dump($float2);

echo '<hr>';

/**/



$n1 = 4; //é do tipo inteiro
$t = "EscolaElaborta"; // é do tipo string.

echo "n1 : $n1";
echo "<br/> t: $t";

//convertendo string em inteiro
$t = (integer) "Elabo5rata"; //int ou integer
echo "<br/>Elaborata em inteiro: $t";

//usando a função sttype para converter
$a = "10tomates";
$b = false;

settype($a, "int"); //converte a variavel $a em int
echo '<br/> A variavel $a convertida: ' . $a;

settype($b, "integer"); //converte a variavel $b em int
echo '<br/> A variavel $b convertida: ' . $b;




echo '<hr>';

$array = [
			'a1' => 'texto',
			'a2' => 'modelo',
			'a3' => 'teste',
			'a4' => 'não sei',
			'bbb' => [
				'b1' => 'textob1',
					'b2' => [ 
						'e1' => 'frase1',
						'e2' => 'frase2',
						'e3' => 'frase3'			 
						 				 
							],
				
				'b3' => 'textob3',
				'b4' => 'textob4' 	
					]
			
		 ];
		
echo '<pre>';
print_r($array);

echo '<br>';
echo $array ['bbb']['b2']['e2'];
?>
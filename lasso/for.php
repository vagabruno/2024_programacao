<?php   
echo "laço de repetição for" ;


$frutas = array ( "maçã", "banana", "Morango", "Uva", "Abacaxi", " Pera", "Mamão", "Melão", "Melancia","Jaca","Fruta do conde",
"Jaboticaba", "Caju"," Cupuaçi", "Açai", "Bergamota", "Lar" );

$size = count ($frutas); // conta quantas frutas tem

for ($i = 0; $i < 4; $i++) {
   echo $frutas [$i] . "<br>";
}
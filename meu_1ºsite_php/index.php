<!DOCTYPE html>
<html>
<body>
<?php
// ver sites beecrowd e https://www.w3schools.com/php/default.asp
/*tem que colocar localhost/(nome da pasta) para abrir o código*/
/* ?> usado para colocar o php no html*/ 
echo "My first PHP script!";
$txt = "PHP";
echo "<br> Estou concatenando"."i love $txt!";
$x = 10;
$y = 10.5;
echo "<br>".$x + $y;
// não há problema em comentar no meio do código
$x = 5 /* + 15 */ + 5;
echo "<br>".$x; //o ponto serve para concatenar, ou seja, juntar um código html com um de php
// diferença entre var_dump e do echo (impressão, como um console.log do js)no localhost ( + array)
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
for ($i=0; $i<sizeof($cars); $i++){
    echo "<br>carro na posição" .$i. " ". $cars[$i];
}
//quantidade de letras(strings)
echo "<br>".strlen("Gabriela Regina Monção");
// quantidade de palavras
echo "<br>".str_word_count("Gabriela Regina Monção");
//if...else
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}



?>

</body>
</html>
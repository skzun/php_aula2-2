<?php

$x = $_POST['numero1'];
$y = $_POST['numero2'];

if($x > $y) {
  echo "$x é maior que $y<br>";
}
if($x < $y) {
  echo "$x é maior que $y<br>";
}
if($x >= $y){
  echo "$x é maior que ou igual $y<br>";
}
if($x <= $y){
    echo "$x é menor ou igual $y<br>";
}
if($x == $y){
    echo "$x é igual $y<br>";

}
if ($x != $y){
    echo "$x é diferente de $y<br>";
}
if ($x <> $y){
    echo "$x é diferente do $y<br>";
}
if ($x === $y){
    echo "$x é identico á $y<br>";
}
if ($x !== $y){
    echo "$x não é identico á $y<br>";
}
if ($x <=> $y){
    echo "$x é alguma coisa diferente do $y<br>FON";
}
?>
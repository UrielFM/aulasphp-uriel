<?php include "recursos.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>

<!-- <style>
h1{
    text-align: center;
    font-size: 50px;
    color: black;
    font-weight: bold;
    text-decoration: underline;
}

h2 {
    font-size: 25px;
    color: darkslategray;
}

h3 {
    font-size: 18px;
}

.alerta{
    font-size: 20px;
    color: red;
    background-color: yellow;
    font-weight: bold;
}

.urgente{
    font-size: 20px;
    color: yellow;
    background-color: red;
    font-weight: bold;
}

.normal{
    font-size: 20px;
    color: blue;
    background-color: lightgreen;
    font-weight: bold;
}

</style> -->

</head>
<body>
    <p> <?=ESCOLA?> - <?=$anoLetivo?></p>
    
    <h1>Condicionais (if, if/else)</h1>
    <hr>

    <h2>Simples(não tem else)</h2>
<?php

$numero = 100;

if($numero > 20){

?>
   <p><?=$numero?> é maior que 20.</p>

<?php   
}
?>

<hr>

    <h2>Composta (if/else)</h2>

<?php
// Controle de Estoque
$produto = "PC";
// $marca = "Dell";
$qtdEmEstoque = 5; //o que temos no momento
$qtdCritica = 2; //mínimo nescessário

?>

<h3>Produto: <?=$produto?></h3>
<!-- <h4>Marca: <?=$marca?></h4> -->
<h4>Estoque: <?=$qtdEmEstoque?></h4>


<?php 
if ($qtdEmEstoque < $qtdCritica) {
?>

  <p class ="alerta"> É necessário comprar/repor!! </p>

<?php
    if ($qtdEmEstoque === 0) {
?>

  <p class="urgente"> URGENTE</P>

<?php  
    }
} else {
?>

 <p class="normal"> Estoque normal

<?php
}

$a = 5;
$b = "5";

var_dump($a == $b); //true
var_dump($a === $b); //false
?>

<hr>
<h2>Encadeada (if, else e elseif)</h2>

<?php

// Verificar o produto para dar uma garantia

if ($produto == "Ultrabook") {
    $garantia = 5;
}elseif($produto == "Geladeira"){
    $garantia = 3;
} elseif ($produto == "TV") {
    $garantia = 2;
} else {
    $garantia = 1;
}
?>


<p>O produto <?=$produto?> possui garantia de <?=$garantia?> ano<?php if($garantia>1) echo "s" ?>.</p>


<h3>Encadeada usando switch/case</h3>

<?php //switch (analise/escolha/avalie)

switch ($produto) {
    case "Ultrabook": $garantia = 5; break;
    case "Geladeira": $garantia = 3; break;
    case "TV": $garantia = 2; break;
    default: $garantia = 1; break;
}
?>
<p>Produto: <?=$produto?></p>
<p>Garantia: <?=$garantia?> ano<?php if($garantia>1) echo "s" ?>.</p>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>

<style>
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

</style>

</head>
<body>
    <h1>Condicionais (if, if/else)</h1>
    <hr>

    <h2>Simples(não tem else)</h2>
<?php

$numero = 100;

if($numero > 20){
    echo "<p>$numero é maior que 20.</p>";
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
//   Se a quantidade em estoque for abaixo da quantidade crítica, então o sistema deve avisar e  pedir para repor. 

if ($qtdEmEstoque < $qtdCritica) {
    echo '<p class ="alerta"> É necessário comprar/repor!! </p>';

    // Condicional Simples/ANINHADA
    if ($qtdEmEstoque === 0) {
        echo '<p class="urgente"> URGENTE</P>';
    }

} else {
    /* Caso contrário, simplismente mostrar o estoque está normal  */
    echo '<p class="normal"> Estoque normal</p>';
}

$a = 5;
$b = "5";


// == IGUALDADE DE VALORES
var_dump($a == $b); //true

// === IGUALDADE DE VALORES E TIPO DE DADOS

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
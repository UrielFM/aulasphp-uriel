<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>

    <h1>Variáveis e Constantes</h1>
    <hr>

<?php
// Variáveis
$curso = "Programandor Web";
$ano = 2023;
$area = "Back-End";


/* Formas de saida COMPLETAS VIA PHP */

// Saida interpolada
echo "<p>Estamos no $curso em $ano.</p>";

// Não dá certo, as variáveis são tratadas como texto
echo '<p>Estamos no $curso em $ano.</p>';

// Saida com CONCATENAÇÃO
echo '<p>Estamos no ' .$curso. ' em ' .$ano.'.</p>';
echo "<p>Estamos no " .$curso. " em " .$ano.".</p>";
?>

<hr>

<!-- Forma de saída ABREVIADA/SIMPLIFICADA -->
<p>Estamos no <?=$curso?> em <?=$ano?>.</p>

<hr>

<?php
// Cosntantes (recomenda-se dar nome em MAIUSULAS)
define("AUTOR", "Uriel Farias Mishima");
const EMPRESA = "ABC Tecnologia";
const ANO_FUNDACAO = 2000;
?>


<!-- Saídas -->
<p>Autor de site: <?=AUTOR?></p>
<p>Nome da empresa: <?=EMPRESA?></p>
<p>Fundada em: <?=ANO_FUNDACAO?></p>

<hr>


</body>
</html>
<?php require "recursos.php"; ?>
<!-- se tiver erro o "require" não deixa a pagina funcionar diferente do "include" que funciona a pagina mas com erro  -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOPS</title>

    <style>
        /* .lista-zebrada li:nth-child(even) {
            background-color: #f2f2f2;
            color: blue;
        }

        .lista-zebrada li {
            padding: 8px;
            border-bottom: 1px solid #ccc;
        } */
    </style>

</head>

<body>

<?php foreach($linguagens as $linguagem){ ?>

    <p><i><?=$linguagem?></i></p>

<?php } ?>

    <h1>Loops</h1>
    <hr>
    <h2>Tradicionais: for, while, do/while</h2>

    <h3>while</h3>
    <?php
    $i = 1;
    while ($i <= 3) {
    ?>

        <p>Senac Penha - I vale <?= $i ?></p>
    
    <?php
        $i++;
    }

    ?>
    <hr>

    <h3>do/while</h3>

    <ul>
        <?php
        $j = 1;
        do {
        ?>
            <li>Item: <?= $j ?></li>
        <?php
            $j++;
        } while ($j <= 5)
        ?>
    </ul>
    <hr>

    <h3>for</h3>
    <?php
    $alunos = ["Jean", "Giuseppe", "Arthur", "Pedro", "Paola"];

    $quantidade = count($alunos);

        for ($i=0; $i < $quantidade; $i++) { 
    ?>
           <p>Aluno: <?=$alunos[$i]?></p>
    <?php
    }
    ?>

    <hr>
    <h3>foreach</h3>
    <?php foreach ($alunos as $aluno) {
    ?>
        <p>Aluno: <?=$aluno?></p>
    <?php
    }
    ?>
    <hr>

    <?php
    $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    ?>



<ol class="lista-zebrada">
    
    <?php foreach ($meses as $mes) { ?>
        <li><?=$mes?></li>

    <?php } ?>

</ol>
   




</body>

</html>
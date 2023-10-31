<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
<style>

body{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color:aqua ;
}
h1{
    text-align: center;
    font-size: 50px;
    color: blue;
}

li {
    font-size: 25px;
    color: gray;
    margin-bottom: 10px;
    padding: 5px;
    
}

span{
    color: black;
    font-weight: bold;
}

</style>

</head>

<body>
    <h1>Exercício 02</h1>
<hr>

<?php
$dados = [
    "usuario" => "Chapolin.Colorado",
    "senha" => "teste123",
    "idade" => 30,
    "cidade" => "São Paulo",
    "telefones" => [
        "fixo"=> "(11) 2135-0300", 
        "celular" => "(11) 91234-5678"
    ],
]
?>


<ol>
    <li><span>Nome de usuário:</span> <?=$dados["usuario"]?></li>
    <li><span>Idade:</span> <?=$dados["idade"]?> anos</li>
    <li><span>Cidade:</span> <?=$dados["cidade"]?></li>
    <li><span>Telefone:</span> <?=$dados["telefones"]["fixo"]?></li>
</ol>


</body>
</html>
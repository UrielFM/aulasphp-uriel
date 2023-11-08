<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de dados</title>
</head>
<body>
    <h1>Processamento dos dados vindos do formulário</h1>
    <hr>

<?php
/*  
> Recebendo os dados via método do formulário post
> Usando o array superglobal $_POST[]
<pre><?=var_dump($_POST)?></pre>
 */

 $nome = $_POST["nome"];
 $email = $_POST["email"];
 $nascimento = $_POST["nascimento"];
 $mensagem = $_POST["mensagem"];

 if (empty($nome) || empty($email)) {
?>
    <p>Vocè deve preencher nome e e-mail!</p>

<?php
 } else {
?>

<h2>Dados recebidos:</h2>
<ul>
    <li>Nome: <?=$nome?></li>
    <li>E-mail: <?=$email?></li>
    
<!-- Se Nascimento NÃO ESTIVER VAZIO -->
 <?php if (!empty($nascimento)) { ?>
     <li>Data de Nascimento: <?=$nascimento?></li>
<?php }  ?>

<!-- Se Mensagem NÃO ESTIVER VAZIO -->
<?php if (!empty($mensagem)) { ?>
    <li>Mensagem: <?=$mensagem?></li>
<?php }  ?>

</ul>

<?php } ?>

</body>
</html>
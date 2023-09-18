<?php

include 'conexao.php';
$conexao = conexaoBD();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO DE LOCALIDADE</title>
    <link rel="stylesheet" type ="text/css" href="./css/index.css">
    <link rel="shortcut icon" href="https://tse3.mm.bing.net/th?id=OIP.c27srduiMXiMPjfBz-2Z9AHaEc&pid=Api&P=0&h=180">
</head>
<body>
<h1>PÁGINA INICIAL</h1>

<a href="./adicionar.php">ADICIONAR REGISTRO</a> <br> <br>
<?php

$stmt = $conexao->query("SELECT * FROM cadastro");
while ($row = $stmt->fetch()) { ?>

<div id="registros">
<fieldset><ul>
<li>
ID: <?= $row['ID']?> 
</li>
<li>
Nome: <?= $row['nome']?>
</li>
<li>
Telefone: <?= $row ['telefone']?>
</li>
<li>
Local: <?= $row ['local']?>
</li>
</ul>
<a href="./editar.php?id=<?= $row['ID']?>">EDITAR</a> |
<a href="./remover.php?id=<?= $row['ID']?>">REMOVER</a>
</fieldset>
</div>

<?php 

} ?> 

<form>
</body>
</html>
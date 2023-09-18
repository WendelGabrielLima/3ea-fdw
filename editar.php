<?php

include 'conexao.php';
$conexao = conexaoBD();
$id = $_GET['id'];
$stmt = $conexao->prepare('SELECT * FROM cadastro WHERE id = :id');
$stmt->bindParam(':id', $id);
$stmt->execute();
$cadastro = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIÇÃO DE DADOS</title>
</head>
<body>
<H1>EDITANDO O REGISTRO de ID: <?= $id?></H1>

    <form action="edicao.php" method="POST">
    <input type="hidden" name ="id" value="<?php echo $id?>">
    <label for="nome">NOME: </label>
    <input type="text" name="nome" id="nome" value="<?= $cadastro['nome']?>"required="required"> <br> <br>
    <label for="telefone">TELEFONE: </label>
    <input type="tel" name="telefone" id="telefone" required="required"value="<?= $cadastro['telefone']?>"> <br> <br>
    <label for="idade">IDADE: </label>
    <input type="number" name="idade" id="idade" required="required" value="<?= $cadastro['idade']?>"> <br> <br>
    <label for="local">LOCAL: </label>
    <input type="text" name="local" id="local" required="required" value="<?= $cadastro['local']?>"> <br> <br>
    ------------------------------------------------- <br> <br>
    <input type="submit" value="EDITAR" id="enviar" name="enviar">
    <input type="reset" value="LIMPAR" id="limpar" name="limpar">

</body>
</html>
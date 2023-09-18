<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERÇÃO DE REGISTROS</title>
</head>
<body>
    <H1>ADICIONANDO UM NOVO REGISTRO</H1>
    <form action="insercao.php" method="POST">
    <label for="nome">NOME: </label>
    <input type="text" name="nome" id="nome" required="required"> <br> <br>
    <label for="telefone">TELEFONE: </label>
    <input type="tel" name="telefone" id="telefone" required="required" size="9"> <br> <br>
    <label for="idade">IDADE: </label>
    <input type="number" name="idade" id="idade" required="required" size="2"> <br> <br>
    <label for="local">LOCAL: </label>
    <input type="text" name="local" id="local" required="required"> <br> <br>
    ------------------------------------------------- <br> <br>
    <input type="submit" value="REGISTRAR" id="enviar" name="enviar">
    <input type="reset" value="LIMPAR" id="limpar" name="limpar">
    </form>
</body>
</html>
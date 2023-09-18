<?php

include 'conexao.php';
$conexao = conexaoBD();

$id = $_POST['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$idade = $_POST['idade'];
$local = $_POST['local'];

$stmt = $conexao->prepare("UPDATE cadastro SET nome= :nome, telefone= :telefone, idade= :idade, local= :local WHERE ID = :id");
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':telefone', $telefone);
$stmt->bindParam(':idade', $idade);
$stmt->bindParam(':local', $local);
$stmt->execute();

header('Location: index.php');

?>

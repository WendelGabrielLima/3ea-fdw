<?php

include 'conexao.php';
$conexao = conexaoBD();

$id = $_GET['id'];
$stmt = $conexao->prepare("DELETE FROM cadastro WHERE ID = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();

header('Location: index>php');

?>
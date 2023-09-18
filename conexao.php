<?php

function conexaoBD() {    
    $host = 'localhost';
    $dbname = 'cadastro';
    $root = 'root';
    $senha = '';

    try {
        $conectar = new PDO("mysql:host=$host;dbname=$dbname", $root, $senha);
        return $conectar;
    }
    catch(PDOException $e) {
        echo "Não foi possível realizar a conexão...";
    }
}
?>
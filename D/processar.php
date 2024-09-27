<?php
include 'conexao.php';

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];

$sql = "INSERT INTO tbagencia (nome, cidade, uf) VALUES ('$nome', '$cidade', '$uf')";
if (mysqli_query($conexao, $sql)) {
    echo "Agência cadastrada com sucesso!";
} else {
    echo "Erro: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>

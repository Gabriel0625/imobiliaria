<?php
include 'conexao.php';
$tipo = $_POST['tp_imovel'];
$sql = "INSERT INTO tb_imovel (tp_imovel) VALUES ('$tipo')";
if ($conexao->query($sql) === TRUE) {
    echo "<script>alert('Imóvel cadastrado com sucesso!'); window.location.href = '../listar_imoveis.html';</script>";
} else {
    echo "<script>alert('Erro ao cadastrar imóvel!'); history.back();</script>";
}
?>
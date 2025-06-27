<?php
include 'conexao.php';
$nome = $_POST['nm_cliente'];
$sql = "INSERT INTO tb_cliente (nm_cliente) VALUES ('$nome')";
if ($conexao->query($sql) === TRUE) {
    echo "<script>alert('Cliente cadastrado com sucesso!'); window.location.href = '../listar_clientes.html';</script>";
} else {
    echo "<script>alert('Erro ao cadastrar cliente!'); history.back();</script>";
}
?>
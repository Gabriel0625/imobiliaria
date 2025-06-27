<?php
include 'conexao.php';
$id = $_GET['id'];
$conexao->query("DELETE FROM tb_cliente WHERE id_cliente = $id");
header('Location: ../listar_clientes.html');
?>
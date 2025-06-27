<?php
include 'conexao.php';
$id = $_GET['id'];
$conexao->query("DELETE FROM tb_corretor WHERE id_funcionario = $id");
header('Location: ../listar_corretores.html');
?>
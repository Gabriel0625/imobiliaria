<?php
include 'conexao.php';
$id = $_GET['id'];
$conexao->query("DELETE FROM tb_imovel WHERE id_imovel = $id");
header('Location: ../listar_imoveis.html');
?>
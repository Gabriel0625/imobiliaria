<?php
include 'conexao.php';
$id = $_GET['id'];
$conexao->query("DELETE FROM tb_visita WHERE id_visita = $id");
header('Location: ../listar_visitas.html');
?>
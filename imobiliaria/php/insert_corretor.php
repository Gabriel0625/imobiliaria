<?php
include 'conexao.php';
$nome = $_POST['nm_corretor'];
$sql = "INSERT INTO tb_corretor (nm_corretor) VALUES ('$nome')";
if ($conexao->query($sql) === TRUE) {
    echo "<script>alert('Corretor cadastrado com sucesso!'); window.location.href = '../listar_corretores.html';</script>";
} else {
    echo "<script>alert('Erro ao cadastrar corretor!'); history.back();</script>";
}
?>
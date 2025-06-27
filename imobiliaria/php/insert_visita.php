<?php
include 'conexao.php';
$data = $_POST['dt_visita'];
$sql = "INSERT INTO tb_visita (dt_visita) VALUES ('$data')";
if ($conexao->query($sql) === TRUE) {
    echo "<script>alert('Visita agendada com sucesso!'); window.location.href = '../listar_visitas.html';</script>";
} else {
    echo "<script>alert('Erro ao agendar visita!'); history.back();</script>";
}
?>
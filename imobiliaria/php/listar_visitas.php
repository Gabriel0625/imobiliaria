<?php
include 'conexao.php';
$res = $conexao->query("SELECT * FROM tb_visita");
echo "<ul>";
while($row = $res->fetch_assoc()){
    echo "<li>{$row['id_visita']} - {$row['dt_visita']} <a href='php/delete_visita.php?id={$row['id_visita']}'>Excluir</a></li>";
}
echo "</ul>";
?>
<?php
include 'conexao.php';
$res = $conexao->query("SELECT * FROM tb_corretor");
echo "<ul>";
while($row = $res->fetch_assoc()){
    echo "<li>{$row['id_funcionario']} - {$row['nm_corretor']} <a href='php/delete_corretor.php?id={$row['id_funcionario']}'>Excluir</a></li>";
}
echo "</ul>";
?>
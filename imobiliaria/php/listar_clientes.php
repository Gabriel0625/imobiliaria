<?php
include 'conexao.php';
$res = $conexao->query("SELECT * FROM tb_cliente");
echo "<ul>";
while($row = $res->fetch_assoc()){
    echo "<li>{$row['id_cliente']} - {$row['nm_cliente']} <a href='php/delete_cliente.php?id={$row['id_cliente']}'>Excluir</a></li>";
}
echo "</ul>";
?>
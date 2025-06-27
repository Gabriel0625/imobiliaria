<?php
include 'conexao.php';
$res = $conexao->query("SELECT * FROM tb_imovel");
echo "<ul>";
while($row = $res->fetch_assoc()){
    echo "<li>{$row['id_imovel']} - {$row['tp_imovel']} <a href='php/delete_imovel.php?id={$row['id_imovel']}'>Excluir</a></li>";
}
echo "</ul>";
?>
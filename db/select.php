<?php

include_once('conexion.php');



$consulta = $pdo->query("SELECT noticia FROM blog;");


while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "{$linha['noticia']} <br />";
}
?>


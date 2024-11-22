<?php

function fetchClientSegments($conexao, $sql) {
    $res = $conexao->query($sql);
    return $res->fetch_all(MYSQLI_ASSOC);
}



?>

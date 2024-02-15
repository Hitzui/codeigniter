<?php

use Config\Database;

$db = Database::connect();

$query = $db->query('select * from cargo')->getResult();
foreach ($query as $item) {
    echo $item->idcargo;
    echo $item->descripcion;
}
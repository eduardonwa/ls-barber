<?php

namespace Http\Controllers;

use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);

$negocio = $db->query("SELECT * FROM negocio")->fetchAll();
$horario = $db->query("SELECT * FROM horario")->fetchAll();
$enlaces = $db->query("SELECT * FROM enlace_contacto")->fetchAll();

require view("index.view.php", [
    'negocio' => $negocio,
    'horario' => $horario,
    'enlaces' => $enlaces
]);
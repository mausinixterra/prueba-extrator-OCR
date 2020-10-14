<?php
include_once ('controller/Base.php');
$baseController = new Base();

$ruta = $_GET['r'];

switch ($ruta){
    case 'post':
        $baseController->post();
        break;

    default:
        $baseController->main();
}
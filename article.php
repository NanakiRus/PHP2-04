<?php

require __DIR__ . '/autoload.php';

$controller = new \App\Controller\Index();

if (isset($_GET['id'])) {
    $controller->action('One');
}
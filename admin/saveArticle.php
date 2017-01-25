<?php

require __DIR__ . '/../autoload.php';

$controller = new \App\Controller\Admin();
$controller->action('CU');

header('Location: /obychenie/Php2-04/admin/index.php');
die;
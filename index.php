<?php

require __DIR__ . '/autoload.php';

$controllerName = $_GET['ctrl'] ?? 'Index';

$controllerClassName = '\\App\\Controller\\' . $controllerName;

$controller = new $controllerClassName;

$actionName = $_GET['act'] ?? 'All';

$controller->action($actionName);

<?php

require __DIR__ . '/autoload.php';

if (isset($_GET['id'])) {
    $news = new \App\Models\Article();
    $news->id = $_GET['id'];
    $news->delete();
}
header('Location: /obychenie/Php2-03/index.php');
die;
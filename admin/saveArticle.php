<?php

require __DIR__ . '/../autoload.php';

if (isset($_POST['id']) && '' !== $_POST['id']) {
    $article = \App\Models\Article::findOneById((int)$_POST['id']);

    if (false === $article) {
        $article = new \App\Models\Article();
    }

} else {
    $article = new \App\Models\Article();
}

if(isset($_POST['id']) && '' !== $_POST['id']) {
    $article->id = $_POST['id'];
}

if (isset($_POST['title']) && isset($_POST['text'])) {
    $article->title = $_POST['title'];
    $article->text = $_POST['text'];
    $article->save();
}

header('Location: /obychenie/Php2-04/admin/index.php');
die;
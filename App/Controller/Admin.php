<?php

namespace App\Controller;


use App\Controller;
use App\Models\Article;

class Admin
    extends Controller
{

    protected function actionAll()
    {
        $this->view->news = Article::findAll();
        $this->view->view(__DIR__ . '/../../template/admin/template.php');
    }

    protected function actionOne()
    {
        $this->view->article = Article::findOneById($_GET['id']);
        $this->view->view(__DIR__ . '/../../template/admin/article.php');
    }

    protected function actionDelete()
    {
        if (isset($_GET['id'])) {
            $news = Article::findOneById((int)$_GET['id']);
            $news->delete();
        }
    }

    protected function actionCU()
    {
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
    }


}
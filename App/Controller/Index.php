<?php


namespace App\Controller;


use App\Controller;
use App\Models\Article;

class Index
    extends Controller
{

    protected function beforeAction()
    {
    }



    protected function actionAll()
    {
        $this->view->news = Article::findAll();
        $this->view->view(__DIR__ . '/../../template/template.php');

    }

    protected function actionOne()
    {
        $this->view->article = Article::findOneById($_GET['id']);
        $this->view->view(__DIR__ . '/../../template/article.php');
    }

}
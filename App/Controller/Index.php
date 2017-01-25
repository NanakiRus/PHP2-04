<?php


namespace App\Controller;


use App\Controller;
use App\Models\Article;

class Index
    extends Controller
{

    protected function beforeAction()
    {
        if (in_array('admin', explode( '/', $_SERVER['REQUEST_URI']))) {
            return true;
        } else {
            return false;
        }
    }



    protected function actionAll()
    {
        $this->view->news = Article::findAll();
        if (true === $this->beforeAction()) {
            $this->view->view(__DIR__ . '/../../template/admin/template.php');
        } else {
            $this->view->view(__DIR__ . '/../../template/template.php');
        }

    }

    protected function actionOne()
    {
        $this->view->article = Article::findOneById($_GET['id']);
        $this->view->view(__DIR__ . '/../../template/admin/article.php');
    }

}
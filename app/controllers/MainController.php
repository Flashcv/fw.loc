<?php

namespace app\controllers;

use vendor\core\base\Controller;

use app\models\Main;
use vendor\core\App;
use vendor\core\base\View;

class MainController extends AppController
{

//    public $layout = 'main';

    public function indexAction() {
//        \R::fancyDebug(true);
        $model = new Main;
//        echo $test;
//        trigger_error("E_USER_ERROR", E_USER_ERROR);
         $posts = \R::findAll('posts');
        $post = \R::findOne('posts', 'id = 1');
        $menu = $this->menu;
        $title = 'PAGE TITLE';
//        $this->setMeta('Головна сторінка', 'Опис сторінки', 'Ключові слова');
//        $meta = $this->meta;
        View::setMeta('Головна сторінка', 'Опис сторінки', 'Ключові слова');
        $this->set(compact('title', 'posts', 'menu', 'meta'));

    }

    public function testAction() {
        if ($this->isAjax()){
            $model = new Main();
//            $data = ['answer' => 'Відповідь з сервера', 'code' => 200];
//            echo json_encode($data);
            $post = \R::findOne('posts', "id = {$_POST['id']}");
            $this->loadView('_test', compact('post'));
            die;
        }
        echo 222;
//        $this->layout = false;
    }
}
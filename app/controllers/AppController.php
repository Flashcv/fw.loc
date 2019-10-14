<?php


namespace app\controllers;


class AppController extends \vendor\core\base\Controller
{

    public $menu;
    public $meta = [];

    public function __construct ($route) {
        parent::__construct($route);
//        if ($this->route['controller'] == 'main' && $this->route['action'] == 'test') {
//            echo '<h1>TEST</h1>';
//        }
        new \app\models\Main;
        $this->menu = \R::findAll('category');
    }

    protected function setMeta($title = '', $description = '', $keywords = '') {
        $this->meta['title'] = $title;
        $this->meta['description'] = $description;
        $this->meta['keywords'] = $keywords;
    }
}
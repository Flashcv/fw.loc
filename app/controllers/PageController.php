<?php


namespace app\controllers;




class PageController extends AppController {

    public function viewAction(){
        $menu = $this->menu;
        $title = 'Сторінка';
        $this->set(compact('title', 'menu'));
//        debug($this->route);
    }

}
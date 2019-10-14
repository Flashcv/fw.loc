<?php

require 'rb.php';
$db = require '../config/config_db.php';
R::setup($db['dsn'], $db['user'], $db['pass'], $options);
R::freeze(true);
R::fancyDebug(true);
//var_dump(R::testConnection());

// Create
$cat = R::dispense('category');
$cat->title = 'Категорія 3';
$id = R::store($cat);
//var_dump($id);

// Read
//$cat = R::load('category', 2);
//echo $cat['title'];

// Update
//$cat = R::load('category', 3);
//echo $cat->title . '<br>';
//$cat->title= 'Категорія 3';
//R::store($cat);
//echo $cat->title;
//$cat = R::dispense('category');
//$cat->title = 'Категорія 3!!!';
//$cat->id = 3;
//R::store($cat);

// Delete
//$cat = R::load('category', 2);
//R::trash($cat);
//R::wipe('category');

//$cats = R::findAll('category', 'id > ?', [2]);
//$cats = R::findAll('category', 'title LIKE ?', ['%cat%']);
//$cat = R::findOne('category', 'id = 2');
//echo '<pre>';
//print_r($cats);
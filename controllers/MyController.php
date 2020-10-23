<?php


namespace app\controllers;

class MyController extends AppController {

    public function actionIndex($id = null){

        // для ссылки вида yii2/web/index.php?r=my/index

        $hi = 'Hello, World! Передаем переменную $hi из MyController.';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];

        if(!$id) $id = 'test';
        // return $this->render('index', ['hello' => $hi, 'arrnames' => $names]); // другой способ записи
        return $this->render('index', compact('hi', 'names', 'id'));

    }

    public function actionBlogPost(){
        //  для ссылки вида my/blog-post
        return 'Blog Post';
    }

}
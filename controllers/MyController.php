<?php


namespace app\controllers;

use yii\web\Controller;



class MyController extends Controller {

    public function actionIndex($id = null){

        // для ссылки вида http://yii2/web/index.php?r=my/index

        $hi = 'Hello, World! Передаем переменную $hi из MyController.';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];

        if(!$id) $id = 'test';
        // return $this->render('index', ['hello' => $hi, 'arrnames' => $names]); // другой способ записи
        return $this->render('index', compact('hi', 'names', 'id'));

    }

}
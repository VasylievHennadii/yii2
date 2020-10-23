<?php

namespace app\controllers;

use Yii;

class PostController extends AppController {

    public function actionTest(){

        $names = ['Ivanov', 'Petrov', 'Sidorov'];

        
        // $this->debug(Yii::$app);
        // $this->debug($names);

        return $this->render('test');

    }

}
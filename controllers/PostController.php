<?php

namespace app\controllers;

use Yii;

class PostController extends AppController {

    public $layout = 'basic';

    public function beforeAction($action){
        if($action->id == 'index'){
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex(){
        if(Yii::$app->request->isAjax){
            // debug($_POST);
            debug(Yii::$app->request->post());
            return 'test';
        }
        return $this->render('test');
    }

    public function actionShow(){
        // $this-> layout = 'basic';
        $this->view->title = 'Одна статья!';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики....']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы....']);
        return $this->render('show');
    }

}
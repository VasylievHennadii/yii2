<?php

namespace app\controllers;

use app\models\Category;
use app\models\TestForm;
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

        //удаление данных из БД строки с id=6
        // $post = TestForm::findOne(6);
        // $post->delete();


        //удаление записей где id>4
        // TestForm::deleteAll(['>', 'id', 4]);


        //метод save() используем для обновления данных в БД
        // $post = TestForm::findOne(2);
        // $post->email = '222@2.com';   // меняем email в таблице post (взятой из TestForm) строка с id=2
        // $post->save();


        //метод save() используем для записи новых данных в БД, когда создаем $model = new TestForm();
        $model = new TestForm();
        // $model->name = 'Автор';
        // $model->email = 'mail@mail.com';
        // $model->text = 'Текст моего сообщения';
        // $model->save();        

        if($model->load(Yii::$app->request->post())){            
            if($model->save()){
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }        

        $this->view->title = 'Все статьи';
        return $this->render('test', compact('model'));
    }

    public function actionShow(){
        // $this-> layout = 'basic';
        $this->view->title = 'Одна статья!';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики....']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы....']);

        // $cats = Category::find()->all();
        // $cats = Category::find()->orderBy(['id' => SORT_ASC])->all();
        // $cats = Category::find()->orderBy(['id' => SORT_DESC])->all();
        // $cats = Category::find()->asArray()->all();
        // $cats = Category::find()->asArray()->where('parent=691')->all(); 
        // $cats = Category::find()->asArray()->where(['parent' => 691])->all();
        // $cats = Category::find()->asArray()->where(['like', 'title', 'iPad'])->all(); 
        // $cats = Category::find()->asArray()->where(['<=', 'id', 695])->all(); 
        // $cats = Category::find()->asArray()->where('parent=691')->limit(2)->all(); 
        // $cats = Category::find()->asArray()->where('parent=691')->limit(1)->one();
        // $cats = Category::find()->asArray()->where('parent=691')->count();
        // $cats = Category::find()->asArray()->count();
        // $cats = Category::findOne(['parent' => 691]);
        // $cats = Category::findAll(['parent' => 691]);

        // $query = "SELECT * FROM categories WHERE title LIKE '%pp%'";
        // $cats = Category::findBySql($query)->all();

        // $query = "SELECT * FROM categories WHERE title LIKE :search";
        // $cats = Category::findBySql($query, [':search' => '%pp%'])->all();


        //методы hasMany и hasOne
        
        // $cats = Category::findOne(694);   //ЛЕНИВАЯ ЗАГРУЗКА
        // $cats = Category::find()->all();     //ЛЕНИВАЯ ЗАГРУЗКА
        $cats = Category::find()->with('products')->all();   //ЖАДНАЯ ЗАГРУЗКА






        return $this->render('show', compact('cats'));
    }

}
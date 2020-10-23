<?php

namespace app\controllers\admin;

use yii\web\Controller;

class UserController extends Controller {

    public function actionIndex(){

        // для ссылки вида http://yii2/web/index.php?r=admin/user/index

        return $this->render('index');
    }

}
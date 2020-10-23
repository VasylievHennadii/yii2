<?php

namespace app\controllers\admin;

use app\controllers\AppController;


class UserController extends AppController {

    public function actionIndex(){

        // для ссылки вида yii2/web/index.php?r=admin/user/index

        return $this->render('index');
    }

}
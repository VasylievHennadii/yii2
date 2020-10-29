<?php

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord{

    /**
     * метод возвращает название таблицы из БД, с которой мы хотим работать
     */
    public static function tableName() {
        return 'categories';
    }

}










?>
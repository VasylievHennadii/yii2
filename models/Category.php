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

    /**
     * метод связывает таблицы categories и products по принципу один ко многим (hasMany)
     */
    public function getProducts(){
        return $this->hasMany(Product::className(), ['parent' => 'id']);
    }
}










?>
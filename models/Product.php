<?php

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord{

    /**
     * метод возвращает название таблицы из БД, с которой мы хотим работать
     */
    public static function tableName() {
        return 'products';
    }

    /**
     * метод связывает таблицы products и categories по принципу один к одному (hasOne)
     */
    public function getCategories(){
        return $this->hasOne(Category::className(), ['id' => 'parent']);
    }


}










?>
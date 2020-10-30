<?php 

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class TestForm extends ActiveRecord {

    // public $name;
    // public $password;
    // public $email;
    // public $text;

    public static function tableName() {
        return 'posts';
    }


    public function attributeLabels() {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Текст сообщения',
        ];
    }

    public function rules() {
        return [
            [['name', 'text'], 'required'],            
            ['email', 'email'],
            ['text', 'trim'],
            // [['name', 'email'], 'required', 'message' => 'Поле обязательно'],
            // ['name', 'string', 'min'=>2],
            // ['name', 'string', 'max'=>5],
            // ['name', 'string', 'length'=>[2,5]],
            // ['name', 'myRule'],            
        ];
    }

    // public function myRule($attr){
    //     if(!in_array($this->$attr, ['hello', 'world'])){
    //         $this->addError($attr, 'Wrong!');
    //     }
    // }

}







?>
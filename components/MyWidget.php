<?php

namespace app\components;
use yii\base\Widget;


class MyWidget extends Widget {

    public $name;

    public function init(){
        parent::init();
        // if($this->name === null){
        //     $this->name = 'Гость';
        // }
        ob_start();
    }

    public function run() {
        $content = ob_get_clean();
        $content = mb_strtoupper($content, 'utf-8'); // переводим контент из show 'привет мир!!! нижний регистр' в верхний регистр
        return $this->render('my', compact('content'));
        // return "<h1>{$this->name}, Привет, мир! Widget</h1>";
        // return $this->render('my', ['name' => $this->name]);
    }

}







?>
<?php
namespace app\controllers; //ที่อยู่ของ controllers

class HelloController extends \yii\web\Controller{
    
    public function actionFirst(){
        echo 'Hell Controller action first';
        
        return $this->render('first',['title'=>'Ladawan']);
    }
}
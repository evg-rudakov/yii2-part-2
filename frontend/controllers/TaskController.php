<?php


namespace frontend\controllers;


use yii\web\Controller;

class TaskController extends Controller
{
    public function actionIndex()
    {
        return $this->$this->render('index');
    }
}
<?php

namespace app\controllers;

use yii\web\Controller;

class HelpController extends Controller
{

    public function actionIndex(){
        return $this->render('index');
    }

    public function actionAccountSettings() {
        return $this->render('account-settings');
    }

}
<?php

namespace giicms\user\controllers;

use Yii;
use yii\web\Controller;

/**
 * Login controller for the `user` module
 */
class LogoutController extends Controller
{

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        Yii::$app->user->logout();
        return $this->redirect(Yii::$app->user->returnUrl);
    }

}

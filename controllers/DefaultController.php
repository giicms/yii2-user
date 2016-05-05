<?php

namespace giicms\user\controllers;

use yii\web\Controller;
use giicms\user\models\User;

/**
 * Default controller for the `user` module
 */
class DefaultController extends Controller
{

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex($id)
    {
        $user = User::findOne($id);
        return $this->render('index', ['user' => $user]);
    }

}

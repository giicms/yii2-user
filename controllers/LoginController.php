<?php

namespace giicms\user\controllers;

use Yii;
use yii\web\Controller;
use frontend\modules\user\models\LoginForm;

/**
 * Login controller for the `user` module
 */
class LoginController extends Controller
{

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        if (!\Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login())
        {
            return $this->redirect(Yii::$app->user->returnUrl);
        }
        else
        {
            return $this->render('index', [
                        'model' => $model,
            ]);
        }
    }

}

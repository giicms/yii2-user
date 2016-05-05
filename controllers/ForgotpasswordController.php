<?php

namespace giicms\user\controllers;

use Yii;
use yii\web\Controller;
use frontend\modules\user\models\PasswordResetRequestForm;

/**
 * Forgotpassword controller for the `user` module
 */
class ForgotpasswordController extends Controller {

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }

            return $this->redirect('/user/forgotpassword');
        }

        return $this->render('index', [
                    'model' => $model,
        ]);
    }

}

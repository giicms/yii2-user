<?php

namespace giicms\user\controllers;

use Yii;
use yii\web\Controller;
use giicms\user\models\SignupForm;
use giicms\user\models\User;

/**
 * Signup controller for the `user` module
 */
class SignupController extends Controller
{

    public $successUrl = '/user/login';

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'successCallback'],
                'successUrl' => $this->successUrl
            ],
        ];
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()))
        {
            if ($user = $model->signup())
            {
                if (Yii::$app->getUser()->login($user))
                {
                    return $this->goHome();
                }
            }
        }

        return $this->render('index', ['model' => $model]);
    }

    public function successCallback($client)
    {
        $session = Yii::$app->session;
        $attributes = $client->getUserAttributes();
        $email = User::find()->where(['email' => $attributes['email']])->one();

        if ($email)
        {
            // email, fbid existed, login success    
            $fbid = User::find()->where(['fbid' => $attributes['id'], 'email' => $attributes['email']])->one();
            if ($fbid)
            {
                $active = User::find()->where(['fbid' => $attributes['id'], 'email' => $attributes['email'], 'status' => 1])->one();
                if ($active)
                {
                    Yii::$app->user->login($active);
                }
                else
                {
                    // email existed, redirect to login  
                    $session->set('active', 'true');
                    $session->set('email', $attributes['email']);
                    $session->set('fbid', $attributes['id']);
                    $this->successUrl = Yii::$app->urlManager->createAbsoluteUrl(['site/login']);
                }
            }
            else
            {
                // email existed, redirect to login  
                $session->set('login', '');
                $session->set('email', $attributes['email']);
                $session->set('fbid', $attributes['id']);
                $this->successUrl = Yii::$app->urlManager->createAbsoluteUrl(['site/login']);
            }
        }
        else
        {
            // email not exist, redirect to register    
            $session->set('login', 'false');
            $session->set('email', $attributes['email']);
            $session->set('fbid', $attributes['id']);
            $session->set('name', $attributes['name']);
            $this->successUrl = Yii::$app->urlManager->createAbsoluteUrl(['site/login']);
        }
    }

}

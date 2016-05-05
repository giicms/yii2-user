<?php

namespace giicms\user\controllers;

use Yii;
use yii\web\Controller;
use common\models\User;
use frontend\modules\user\models\ProfileForm;

/**
 * Profile controller for the `user` module
 */
class ProfileController extends Controller
{

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $user = User::findOne(\Yii::$app->user->id);
        return $this->render('index', ['user' => $user]);
    }

    public function actionUpdate()
    {
        $model = new ProfileForm();
        $user = User::findOne(\Yii::$app->user->id);
        if ($model->load(Yii::$app->request->post()))
        {
            if ($model->profile())
            {
                return $this->redirect('/user/profile');
            }
        }
        return $this->render('update', ['model' => $model, 'user' => $user]);
    }

    public function actionUpload()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $output_dir = '/uploads';
        if (isset($_FILES["myfile"]))
        {

            $ret = array();

            $error = $_FILES["myfile"]["error"];
            //You need to handle  both cases
            //If Any browser does not support serializing of multiple files using FormData() 
            if (!is_array($_FILES["myfile"]["name"]))
            { //single file
                $fileName = $_FILES["myfile"]["name"];
                $size = number_format($_FILES["myfile"]["size"] / 1024, 2);
                list($name, $ext) = explode(".", $fileName);
//                list($width, $height) = getimagesize($_FILES["myfile"]["tmp_name"]);



                $new_name = time();
                if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $output_dir . $new_name . '.' . $ext))
                {
                    $fileNameArray = explode('.', $fileName);
                    $fileTypeArray = explode('/', $_FILES["myfile"]["type"]);
//                    if (($width > 400) || ( $height > 400)) {
//                        $img = \Imagicks::open($output_dir . $new_name . '.' . $ext)->thumb(400, 400)->saveTo($output_dir . 'thumbnails/' . $new_name . '.png');
//                    } else {
//                        if ($width > $height)
//                            $num = $width;
//                        else
//                            $num = $height;
//                    $img = \Imagicks::open($output_dir . $new_name . '.' . $ext)->thumb(400, 400)->saveTo($output_dir . 'thumbnails/' . $new_name . '.png');
//                    }
//                    $img_thumb = $output_dir . 'thumbnails/' . $new_name . '.png';
                    Yii::$app->session->setFlash('img', $new_name . '.png');
                    $ret[] = ['url' => Yii::$app->params['url_file'] . 'thumbnails/' . $new_name . '.png', 'size' => $size, 'name' => $new_name . '.png', 'img_id' => $new_name];
                }
            }
            else
            {  //Multiple files, file[]
                $fileCount = count($_FILES["myfile"]["name"]);
                for ($i = 0; $i < $fileCount; $i++)
                {
                    $fileName = $_FILES["myfile"]["name"][$i];
                    list($name, $ext) = explode(".", $fileName);
                    $new_name = md5($name . time()) . '.' . $ext;
                    if (move_uploaded_file($_FILES["myfile"]["tmp_name"][$i], $output_dir . $new_name))
                    {
                        $img = \Imagicks::open($output_dir . $new_name)->thumb(150, 150)->saveTo($output_dir . 'thumbnails/' . $new_name);
                        $ret[] = array('url' => Yii::$app->params['url_file'] . 'thumbnails/' . $new_name, 'name' => $new_name, 'id' => time());
                    }
                }
            }
            return [
                'data' => $ret
            ];
        }
    }

}

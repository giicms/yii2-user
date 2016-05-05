<?php

namespace giicms\user\controllers;

use Yii;
use yii\web\Controller;
use common\models\User;
use tpmanc\imagick\Imagick;

/**
 * Profile controller for the `user` module
 */
class UploadController extends Controller
{

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $output_dir = 'themes/giicms/webroot/uploads/';
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

                    $img = Imagick::open($output_dir . $new_name . '.' . $ext)->thumb(400, 400)->saveTo($output_dir . 'thumbnails/' . $new_name . '.jpg');

                    $img_thumb = $output_dir . 'thumbnails/' . $new_name . '.jpg';
                    Yii::$app->session->setFlash('img', $new_name . '.jpg');
                    $ret[] = ['url' => '/uploads/thumbnails/' . $new_name . '.jpg', 'size' => $size, 'name' => $new_name . '.jpg', 'img_id' => $new_name];
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
                        $img = Imagick::open($output_dir . $new_name)->thumb(150, 150)->saveTo($output_dir . 'thumbnails/' . $new_name);
                        $ret[] = array('url' => Yii::$app->params['url_file'] . 'thumbnails/' . $new_name, 'name' => $new_name, 'id' => time());
                    }
                }
            }
            return [
                'data' => $ret
            ];
        }
    }

    public function actionCropimage()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (!empty($_POST['img']))
        {
            $output_dir = 'themes/giicms/webroot/uploads/';
            Imagick::open($output_dir . 'thumbnails/' . $_POST['img'])->crop($_POST['x1'], $_POST['y1'], $_POST['w'], $_POST['h'])->thumb(150, 150)->saveTo($output_dir . 'thumbnails/150-' . $_POST['img']);
            Imagick::open($output_dir . 'thumbnails/150-' . $_POST['img'])->thumb(60, 60)->saveTo($output_dir . 'thumbnails/60-' . $_POST['img']);
            $user = User::findOne(Yii::$app->user->id);
            $user->avatar = $_POST['img'];
            $user->save();
            return ['ok'];
        }
    }

}

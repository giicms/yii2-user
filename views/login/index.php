
<?php

use yii\bootstrap\ActiveForm;

$this->title = 'Đăng nhập';
?>
<section class="content">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-md-offset-3">



                <!-- POST -->
                <div class="post" style="margin-bottom: 400px; margin-top: 120px">
                    <?php $form = ActiveForm::begin(['id' => 'form-login', 'options' => ['class' => 'form newtopic']]); ?>
                    <div class="postinfotop">
                        <h2>Đăng nhập</h2>
                    </div>

                    <!-- acc section -->
                    <div class="accsection">
                        <div class="topwrap">
                            <?= $form->field($model, 'username')->textInput(['placeholder' => 'Email'])->label(FALSE) ?>
                            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Mật khẩu'])->label(FALSE) ?>

                            <?= $form->field($model, 'rememberMe')->checkbox() ?>

                        </div>  
                    </div><!-- acc section END -->

                    <div class="postinfobot">
                        <div class="postreply">
                            <div class="pull-left"><button type="submit" class="btn btn-primary">Đăng nhập</button></div>
                            <div class="pull-right"><a href="<?php echo Yii::$app->urlManager->createAbsoluteUrl('/user/forgotpassword') ?>">Quên mật khẩu</a></div>
                            <div class="clearfix"></div>
                        </div>


                        <div class="clearfix"></div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div><!-- POST -->

            </div>

        </div>
    </div>



</section>

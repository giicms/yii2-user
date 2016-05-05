
<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Đăng ký';
?>
<section class="content">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-md-offset-3">



                <!-- POST -->
                <div class="post" style="margin-bottom: 150px; margin-top: 100px">
                    <?php $form = ActiveForm::begin(['id' => 'form-signup', 'options' => ['class' => 'form newtopic']]); ?>
                    <div class="postinfotop">
                        <h2>Đăng ký thành viên</h2>
                    </div>

                    <!-- acc section -->
                    <div class="accsection">
                        <div class="topwrap">

                            <?= $form->field($model, 'firstname')->textInput(['placeholder' => 'Họ'])->label(FALSE) ?>

                            <?= $form->field($model, 'lastname')->textInput(['placeholder' => 'Tên'])->label(FALSE) ?>

                            <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(FALSE) ?>

                            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Mật khẩu'])->label(FALSE) ?>

                            <?= $form->field($model, 'password_repeat')->passwordInput(['placeholder' => 'Nhập lại mật khẩu'])->label(FALSE) ?>
                            <div class="form-group">
                                    <?= Html::submitButton('Đăng ký', ['class' => 'btn btn-primary']) ?>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div><!-- acc section END -->


                    <?php ActiveForm::end(); ?>
                </div><!-- POST -->






            </div>

        </div>
    </div>



</section>

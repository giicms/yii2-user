
<?php

use yii\bootstrap\ActiveForm;

$this->title = 'Quên mật khẩu';
?>
<section class="content">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-md-offset-3">



                <!-- POST -->
                <div class="post" style="margin-bottom: 400px; margin-top: 120px">
                    <?php $form = ActiveForm::begin(['id' => 'form-login', 'options' => ['class' => 'form newtopic']]); ?>
                    <div class="postinfotop">
                        <h2><?=$this->title?></h2>
                    </div>

                    <!-- acc section -->
                    <div class="accsection">
                        <div class="topwrap" style="padding: 15px;">
                            <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(FALSE) ?>

                        </div>  
                    </div><!-- acc section END -->

                    <div class="postinfobot">
                        <div class="postreply">
                            <div class="pull-right"><button type="submit" class="btn btn-primary">Gởi</button></div>
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

<?php

use yii\bootstrap\ActiveForm;

$this->title = 'THông tin cá nhân';
$path = Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/');
?>
<section class="content" style="padding-top: 30px">


    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">

                <!-- -->
                <div class="sidebarblock">
                    <h3>Bài viết</h3>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <ul class="cats">
                            <li><a href="http://forum.azyrusthemes.com/index.html#">Thông báo của bạn</a></li>
                            <li><a href="http://forum.azyrusthemes.com/index.html#">Vault Keys Giveway <span class="badge pull-right">10</span></a></li>
                            <li><a href="http://forum.azyrusthemes.com/index.html#">Misc Guns Locations <span class="badge pull-right">50</span></a></li>
                            <li><a href="http://forum.azyrusthemes.com/index.html#">Looking for Players <span class="badge pull-right">36</span></a></li>
                            <li><a href="http://forum.azyrusthemes.com/index.html#">Stupid Bugs &amp; Solves <span class="badge pull-right">41</span></a></li>
                            <li><a href="http://forum.azyrusthemes.com/index.html#">Video &amp; Audio Drivers <span class="badge pull-right">11</span></a></li>
                            <li><a href="http://forum.azyrusthemes.com/index.html#">2K Official Forums <span class="badge pull-right">5</span></a></li>
                        </ul>
                    </div>
                </div>

                <!-- -->
                <div class="sidebarblock">
                    <h3>Tài khoản</h3>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <ul class="cats">
                            <li><a href="#">Thông tin cá nhân</a></li>
                            <li><a href="#">Chi tiết liên lạc</a></li>
                            <li><a href="#">Quyền riêng tư</a></li>
                            <li><a href="#">Tùy chọn</a></li>
                            <li><a href="#">Thành viên theo dõi</a></li>
                            <li><a href="#">Thành viên bỏ qua</a></li>
                            <li><a href="#">Tài khoản kết nối</a></li>
                            <li><a href="#">Thay đổi thông tin</a></li>
                            <li><a href="#">Thay đổi mật khẩu</a></li>
                        </ul>
                    </div>
                </div>

                <!-- -->



            </div>
            <div class="col-lg-9 col-md-9">
                <!-- POST -->
                <div class="post">
                    <?php
                    $form = ActiveForm::begin([
                                'layout' => 'horizontal',
                                'options' => ['class' => 'form newtopic'],
                                'fieldConfig' => [
                                    'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                                    'horizontalCssClasses' => [
                                        'label' => 'col-sm-3',
                                        'offset' => 'col-sm-offset-3',
                                        'wrapper' => ' col-md-6 col-sm-6 col-xs-12',
                                        'error' => '',
                                        'hint' => '',
                                    ],
                                ],
                    ]);
                    ?>  
                    <div class="postinfotop">
                        <h2>Thông tin cá nhân</h2>
                    </div>

                    <!-- acc section -->
                    <div class="accsection">
                        <div class="topwrap" style="padding: 15px;">
                            <?= $form->field($model, 'firstname')->textInput(['value' => $user->firstname]) ?>
                            <?= $form->field($model, 'lastname')->textInput(['value' => $user->lastname]) ?>
                            <?= $form->field($model, 'username')->textInput(['value' => $user->username]) ?>
                            <?= $form->field($model, 'email')->textInput(['value' => $user->email]) ?>
                            <?= $form->field($model, 'phone')->textInput(['value' => $user->phone]) ?>
                            <?= $form->field($model, 'city')->textInput(['value' => $user->city]) ?>
                            <?= $form->field($model, 'address')->textInput(['value' => $user->address]) ?>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- acc section END -->


                    <div class="postinfobot">


                        <div class="pull-right postreply">
                            <div class="pull-left"><button type="submit" class="btn btn-primary">Cập nhật</button></div>
                            <div class="clearfix"></div>
                        </div>


                        <div class="clearfix"></div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div><!-- POST -->


                <!-- POST -->

            </div>

        </div>
    </div>






</section>
<?php

use yii\bootstrap\ActiveForm;

$this->title = 'Thông tin cá nhân';
$path = Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/');
?>
<section class="content" style="padding-top: 30px">


    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <!-- -->
                <div class="sidebarblock">
                    <h3>Tài khoản</h3>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <ul class="cats">
                            <li><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(["user/profile"]) ?>">Thông tin cá nhân</a></li>
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
                    <div class="postinfotop">
                        <h2>Hình ảnh đại diện</h2>
                    </div>

                    <!-- acc section -->
                    <div class="accsection">
                        <div class="topwrap" style="padding: 15px;">
                            <div class="row">
                                <label class="col-md-3 col-sm-4 col-xs-12">Hình ảnh</label>
                                <div class="col-md-9 col-sm-8 col-xs-12">
                                    <?php
                                    if ($user->avatar) {
                                        ?>
                                        <img src ="<?= Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/uploads/thumbnails') . '/150-' . $user->avatar ?>">
                                    <?php } else { ?>
                                        <img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUzYjFlZWVjZjggdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTNiMWVlZWNmOCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI1OS41NjI1IiB5PSI5NC41Ij4xNzF4MTgwPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true" style="height: 150px; width: 150px; display: block;">
                                        <?php
                                    }
                                    ?>
                                    <div style="margin-top:20px">
                                        <a href="#" class="uploadFile"><span class="fix">Thay ảnh đại diện</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- acc section END -->
                </div><!-- POST -->
                <!-- POST -->
                <div class="post">
                    <div class="postinfotop">
                        <h2>Thông tin <small><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(["user/profile/update"]) ?>/" class="pull-right">Chỉnh sửa</a></small></h2>
                    </div>

                    <!-- acc section -->
                    <div class="accsection">
                        <div class="topwrap" style="padding: 15px;">
               
                            <div class="row">
                                <label class="col-md-3 col-sm-4 col-xs-12">Email</label>
                                <div class="col-md-9 col-sm-8 col-xs-12"><?= $user->email ?></div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-sm-4 col-xs-12">Họ</label>
                                <div class="col-md-9 col-sm-8 col-xs-12"><?= $user->firstname ?></div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-sm-4 col-xs-12">Tên</label>
                                <div class="col-md-9 col-sm-8 col-xs-12"><?= $user->lastname ?></div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-sm-4 col-xs-12">Điện thoại</label>
                                <div class="col-md-9 col-sm-8 col-xs-12"><?= $user->phone ?></div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-sm-4 col-xs-12">Tỉnh/thành</label>
                                <div class="col-md-9 col-sm-8 col-xs-12"><?= $user->city ?></div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-sm-4 col-xs-12">Địa chỉ</label>
                                <div class="col-md-9 col-sm-8 col-xs-12"><?= $user->address ?></div>
                            </div>



                        </div>
                        <div class="clearfix"></div>
                    </div><!-- acc section END -->
                </div><!-- POST -->


                <!-- POST -->

            </div>

        </div>
    </div>
</section>

<?php
if (Yii::$app->session->hasFlash('img')) {
    ?>
    <div class="modal fade bs-example-modal-lg in" id="modalImg" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    <h4 class="modal-title">Hình ảnh</h4>
                </div>
                <div class="modal-body">
                    <?php $form = ActiveForm::begin(['id' => 'cropimage', 'options' => ['enctype' => 'multipart/form-data', 'class' => 'form-horizontal']]); ?>  
                    <div class="row-item">
                        <div class="cropbox" style="margin: 0 auto">
                            <img id="cropbox" src="<?= Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/uploads/thumbnails') . '/' . Yii::$app->session->getFlash('img') ?>">
                        </div>
                    </div>
                    <input type="hidden" id="avatar" name="img" value="<?= Yii::$app->session->getFlash('img') ?>"/>
                    <input type="hidden" size="4" id="x1" name="x1" />
                    <input type="hidden" size="4" id="y1" name="y1" />
                    <input type="hidden" size="4" id="x2" name="x2" />
                    <input type="hidden" size="4" id="y2" name="y2" />
                    <input type="hidden" size="4" id="w" name="w" />
                    <input type="hidden" size="4" id="h" name="h" />

                    <div class="row-item text-right">
                        <button type="submit" class="btn btn-blue" style="padding: 6px 12px; text-transform: none">Lưu</button>
                        <a type="submit" class="btn btn-default modal-cancel">Hủy</a>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    echo $this->registerJs("$(document).ready(function(){
                          $('#modalImg').modal({
                   show: true,
                   backdrop: 'static',
                   keyboard: false
}); 
    });");
}
?>
<?= $this->registerCssFile(Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/css/jquery.Jcrop.css'), ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
<?= $this->registerJsFile(Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/js/jquery-ui.min.js'), ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
<?= $this->registerJsFile(Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/js/jquery.uploadfile.min.js'), ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
<?= $this->registerJsFile(Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/js/jquery.Jcrop.js'), ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
<?=
$this->registerJs('$(document).ready(function ()
{
    var upload = {
        url: "' . Yii::$app->urlManager->createAbsoluteUrl(["user/upload"]) . '",
        method: "POST",
        allowedTypes: "jpg,png,jpeg,gif",
        fileName: "myfile",
        multiple: false,
        maxSize: 100000,
        onBeforeSend: function () {
            $(".loading").html("Đang tải...");
        },
        onSuccess: function (files, data, xhr)
        {
            $.each(data, function (index, value) {
                window.location.href = "' . $_SERVER['REQUEST_URI'] . '";          
            });
        },
        onError: function (files, status, errMsg)
        {
            $(".resultFile").html("Không đúng định dạng hoặc size không quá 2 MB");
        }
    };
        $(".uploadFile").uploadFile(upload);

})');
?>
<?=
$this->registerJs("$(document).ready(function(){
   
				jQuery('#cropbox').Jcrop({
					onChange: showCoords,
					onSelect: showCoords,
                                        minSize: [150,150],
                                        setSelect:[50, 50, 200, 200 ],
                                        aspectRatio: 1/1,

				});

			});

			// Simple event handler, called from onChange and onSelect
			// event handlers, as per the Jcrop invocation above
			function showCoords(c)
			{
				jQuery('#x1').val(c.x);
				jQuery('#y1').val(c.y);
				jQuery('#x2').val(c.x2);
				jQuery('#y2').val(c.y2);
				jQuery('#w').val(c.w);
				jQuery('#h').val(c.h);
			};")
?>
<?= $this->registerJs("$(document).on('submit', '#cropimage', function (event){
        event.preventDefault();
    $.ajax({
        url: '/user/upload/cropimage/',
               type: 'post',
          data: $('form#cropimage').serialize(),
        success: function(data) {
          if(data){
  window.location.href = '" . $_SERVER['REQUEST_URI'] . "';        
}
        }
    });

});") ?>
<?= $this->registerJs('
$(document).on("click", ".modal-cancel", function (event){
                 window.location.href = "' . $_SERVER['REQUEST_URI'] . '";
});') ?>
<?php
$this->title = 'THông tin cá nhân: ' . $user->firstname . ' ' . $user->lastname;
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
                    <div class="wrap-ut pull-left">
                        <div class="userinfo pull-left">
                            <div class="avatar">
                                <img src="<?= $path ?>/images/avatar.jpg" alt="">
                                <div class="status green">&nbsp;</div>
                            </div>

                            <div class="icons">
                                <img src="<?= $path ?>/images/icon1.jpg" alt=""><img src="<?= $path ?>/images/icon4.jpg" alt="">
                            </div>
                        </div>
                        <div class="posttext pull-left">
                            <h2><a href="http://forum.azyrusthemes.com/02_topic.html">10 Kids Unaware of Their Halloween Costume</a></h2>
                            <p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your prerogative.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="postinfo pull-left">
                        <div class="comments">
                            <div class="commentbg">
                                560
                                <div class="mark"></div>
                            </div>

                        </div>
                        <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                        <div class="time"><i class="fa fa-clock-o"></i> 24 min</div>                                    
                    </div>
                    <div class="clearfix"></div>
                </div><!-- POST -->


                <!-- POST -->

            </div>

        </div>
    </div>






</section>
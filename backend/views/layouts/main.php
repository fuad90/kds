<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use backend\assets\AppAsset;
use backend\widgets\Alert;
use yii\bootstrap\Modal;
use yii\widgets\Menu;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

    <?php $this->beginBody() ?>
        <?php if(Yii::$app->user->isGuest == 1) { ?>

                <!-- BEGIN BODY -->
        <body class="page-md login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.html">
                <!-- title -->
            </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="menu-toggler sidebar-toggler">
        </div>
        <!-- END SIDEBAR TOGGLER BUTTON -->
            <!-- BEGIN LOGIN -->
            <div class="content">
                <!-- BEGIN LOGIN FORM -->

            <?= $content ?>


            </div>
            <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright">
             <?= date('Y') ?> &copy; Cypress Diversified SDN BHD .
        </div>

        <?php } else { ?>

        <body class="page-md">
        <!-- BEGIN HEADER -->
        <div class="page-header">
            <!-- BEGIN HEADER TOP -->
            <div class="page-header-top">
                <div class="container">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="<?php echo Yii::$app->request->baseUrl; ?>"><img src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/layout3/img/logo-default.png" alt="logo" class="logo-default"></a>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler"></a>
                    <!-- END RESPONSIVE MENU TOGGLER -->

                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">

                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/layout3/img/avatar9.jpg">
                                <span class="username username-hide-mobile">Nick</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="extra_profile.html">
                                        <i class="icon-user"></i> My Profile </a>
                                    </li>

                                    <li>
                                        <?= Html::a('<i class="icon-key"></i> Keluar', ['site/logout']) ?>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
            </div>
            <!-- END HEADER TOP -->
            <!-- BEGIN HEADER MENU -->
            <div class="page-header-menu">
                <div class="container">

                    <!-- BEGIN MEGA MENU -->
                    <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                    <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                    <div class="hor-menu ">

                        <?php
                        echo Menu::widget([
                            'items' => [
                                ['label' => 'Utama', 'url' => ['site/index']],
                                ['label' => 'Sukarelawan', 'url' => ['volunteer/index'],'options'=>['id'=>'volunteer']],


                            ],
                            'activateParents'=>true,
                            'encodeLabels' => false,
                            'options' => [
                                            'id' => 'menu',
                                            'class' => 'nav navbar-nav'
                                        ],
                            'submenuTemplate' => "\n<ul class='sub-menu' role='menu'>\n{items}\n</ul>\n",
                        ]);
                        ?>

                    </div>
                    <!-- END MEGA MENU -->
                </div>
            </div>
            <!-- END HEADER MENU -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN PAGE CONTAINER -->
        <div class="page-container">
            <?= $content ?>
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="container">
                 <?= date('Y') ?> &copy; Cypress Diversified SDN BHD .
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
        <!-- END FOOTER -->
        </body>       

        <?php } ?>


    <?php $this->endBody() ?>

<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->

<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/pages/scripts/form-wizard.js"></script>
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
  Layout.init(); // init current layout
  Login.init();
  Demo.init();
  FormWizard.init();
  Tasks.initDashboardWidget(); // init tash dashboard widget


});
</script>
<!-- END JAVASCRIPTS -->
<?php 

Modal::begin([
    'header' =>'KDS - Administrator',
    'id' => 'modal',
    'size' => 'modal-lg',
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],

]);

echo "<div id='modalContent'></div>";
Modal::end();


$this->endPage() ?>


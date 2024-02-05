<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\TeachersPageAsset;
use yii\bootstrap5\Html;

TeachersPageAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Teachers</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
    <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->

    <!-- FONTAWESOME ICONS -->

    <!-- ALL CSS FILES -->



    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->

    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<?php $userImg = Yii::$app->user->identity->user_img;?>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['site']) ?>" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['site']) ?>" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['site']) ?>" class="logo"><img src="images/logo1.png" alt="" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href="admin-all-enquiry.html" title="all enquiry messages"><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="admin-course-enquiry.html" title="course booking messages"><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="admin-admission-enquiry.html" title="admission enquiry"><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'>
                    <img src="<?= Yii::$app->request->baseUrl ?>/uploads/<?= $userImg ?>" alt="head pic"/><?= Yii::$app->user->identity->username ?> <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="admin-panel-setting.html" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['site/logout']) ?>" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout(<?= Yii::$app->user->identity->username ?>)</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="images/placeholder.jpg" alt="">
                        </li>
                        <li>
                            <h5><?= Yii::$app->user->identity->username ?></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['/Teachers']) ?>" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>

                        </li>
                        <li><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['site']) ?>" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> My classes</a></li>
                        <li><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['/Teachers/default/students']) ?>" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Create Student</a></li>
                        <li><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['/Teachers/default/allstudents']) ?>"><i class="fa fa-bookmark-o" aria-hidden="true"></i>All Students</a></li>
                        <li><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['/Teachers/default/studentsearch']) ?>"><i class="fa fa-bookmark-o" aria-hidden="true"></i>Search Student</a></li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bars" aria-hidden="true"></i>Upload Assingment</a></li>
                        <li><a href="grades"><i class="fa fa-image" aria-hidden="true"></i> Grades</a></li>
                        <li><a href="calender" class="collapsible-header"><i class="fa fa-calendar" aria-hidden="true"></i> Planner</a></li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Job Vacants</a></li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-pencil" aria-hidden="true"></i> Exam time table</a></li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-commenting-o" aria-hidden="true"></i> Enquiry</a></li></li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-cloud-download" aria-hidden="true"></i> Import & Export</a></li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-cloud-download" aria-hidden="true"></i> Import & Export</a></li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-cloud-download" aria-hidden="true"></i> Settings</a>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-cloud-download" aria-hidden="true"></i> Profile</a>
                    </ul>
                </div>
            </div>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Dashboard</a>
                        </li>

                        <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                <!--== DASHBOARD INFO ==-->
                <div class="sb2-2-1">
                    <h2>Admin Dashboard</h2>
                    <div class="db-2">
                        <?php
                        $successmessage = Yii::$app->session->getFlash('error');
                        if ($successmessage) {
                            echo '<div class="alert alert-danger">' . $successmessage . '</div>';
                        }
                        ?>
                        <ul>
                            <li>
                                <div class="dash-book dash-b-1">
                                    <h5>All Courses</h5>
                                    <h4>948</h4>
                                    <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['site/courses']) ?>">View more</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-2">
                                    <h5>Admission</h5>
                                    <h4>672</h4>
                                    <a href="#">View more</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-3">
                                    <h5>Students</h5>
                                    <h4>689</h4>
                                    <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['/Teachers/default/allstudents']) ?>">View more</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-4">
                                    <h5>Enquiry</h5>
                                    <h4>24</h4>
                                    <a href="#">View more</a>
                                </div>

                            </li>
                        </ul>
                        <?= $content ?>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
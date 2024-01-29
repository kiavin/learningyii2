<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\PagesAsset;

PagesAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title>Education Master Template</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <style>
        /* Style the dropdown button */
        .dropbtn2 {
            padding: 10px;
            color: white;
            border: none;
            cursor: pointer;
        }

        /* Style the dropdown content (hidden by default) */
        .dropdown-content2 {
            display: none;
            position: absolute;
            background-color: aliceblue;

            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            border-radius: 15px;
            z-index: 1;
        }

        /* Show the dropdown menu on hover */
        .dropdown2:hover .dropdown-content2 {
            display: block;
        }

        /* Style the links inside the dropdown */
        .dropdown-content2 a {
            color: black;
            padding: 6px 8px;
            border-radius: 15px;
            text-decoration: none;
            display: block;
        }

        /* Change color on hover */
        .dropdown-content2 a:hover {
            background-color: #f1f1f1;
            color:aliceblue;
        }
    </style>
    <?php $this->head() ?>
</head>

<!-- MOBILE MENU -->
<section>
    <div class="ed-mob-menu">
        <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
                <div class="wed-logo">
                    <a href="index-2.html"><img src="images/logo.png" alt="" />
                    </a>
                </div>
            </div>
            <div class="ed-mm-right">
                <div class="ed-mm-menu">
                    <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                    <div class="ed-mm-inn">
                        <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                        <h4>All Courses</h4>
                        <h4>User Account</h4>
                        <ul>
                            <li><a href="<?= yii::$app->urlManager->createAbsoluteUrl(['/Admin/login']) ?>" data-toggle="modal" data-target="#modal1">Sign In</a></li>
                            <li><a href="<?= yii::$app->urlManager->createAbsoluteUrl(['site/signup']) ?>">Register</a></li>
                        </ul>
                        <h4>All Pages</h4>
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="admission.html">Admission</a></li>
                            <li><a href="all-courses.html">All courses</a></li>
                            <li><a href="contact-us.html">Contact us</a></li>
                        </ul>
                        <h4>User Profile</h4>
                        <ul>
                            <li><a href="dashboard.html">User profile</a></li>
                            <li><a href="db-courses.html">Courses</a></li>
                            <li><a href="db-exams.html">Exams</a></li>
                            <li><a href="db-profile.html">Prfile</a></li>
                            <li><a href="db-time-line.html">Time line</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--HEADER SECTION-->
<section>
    <!-- LOGO AND MENU SECTION -->
    <div class="top-logo" data-spy="affix" data-offset-top="250">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wed-logo">
                        <a href="index-2.html"><img src="images/logo.png" alt="" />
                        </a>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['/site'])?>">Home</a>
                            </li>
                            <li class="about-menu">
                                <a href="<?= yii::$app->urlManager->createAbsoluteUrl(['site/about']) ?>" class="mm-arr">About us</a>

                            </li>
                            </li>
                            <li><a href="<?= yii::$app->urlManager->createAbsoluteUrl(['site/courses']) ?>">All Courses</a></li>
                            <li class="dropdown2">
                                <a href="#" class="dropbtn2">Portals</a>
                                <div class="dropdown-content2">
                                    <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['/Admin']) ?>">Admin</a>
                                    <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['/Teachers']) ?>">TEACHERS</a>
                                    <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['/Students']) ?>">STUDENTS</a>
                                </div>
                            </li>

                            <li><a href="<?= yii::$app->urlManager->createAbsoluteUrl(['site/contact']) ?>">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-form">
                        <form>
                            <div class="sf-type">
                                <div class="sf-input">
                                    <input type="text" id="sf-box" placeholder="Search course and discount courses">
                                </div>
                            </div>
                            <div class="sf-submit">
                                <input type="submit" value="Search Course">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END HEADER SECTION-->
<?= $content ?>


<!-- FOOTER -->
<section class="wed-hom-footer">
    <div class="container">
        <div class="row wed-foot-link">
            <div class="col-md-4 foot-tc-mar-t-o">
                <h4>Top Courses</h4>
                <ul>
                    <li><a href="course-details.html">Accounting/Finance</a></li>
                    <li><a href="course-details.html">civil engineering</a></li>
                    <li><a href="course-details.html">Art/Design</a></li>
                    <li><a href="course-details.html">Marine Engineering</a></li>
                    <li><a href="course-details.html">Business Management</a></li>
                    <li><a href="course-details.html">Journalism/Writing</a></li>
                    <li><a href="course-details.html">Physical Education</a></li>
                    <li><a href="course-details.html">Political Science</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>New Courses</h4>
                <ul>
                    <li><a href="course-details.html">Sciences</a></li>
                    <li><a href="course-details.html">Statistics</a></li>
                    <li><a href="course-details.html">Web Design/Development</a></li>
                    <li><a href="course-details.html">SEO</a></li>
                    <li><a href="course-details.html">Google Business</a></li>
                    <li><a href="course-details.html">Graphics Design</a></li>
                    <li><a href="course-details.html">Networking Courses</a></li>
                    <li><a href="course-details.html">Information technology</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>HELP & SUPPORT</h4>
                <ul>
                    </li>
                    <li><a href="#">Contact us</a>
                    </li>
                    <li><a href="#">Feedback</a>
                    </li>
                    <li><a href="#">FAQs</a>
                    </li>
                    <li><a href="#">Safety Tips</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row wed-foot-link-1">
            <div class="col-md-4 foot-tc-mar-t-o">
                <h4>Get In Touch</h4>
                <p>Address: 28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p>
                <p>Phone: <a href="#!">+101-1231-4321</a></p>
                <p>Email: <a href="#!">info@edu.com</a></p>
            </div>
            <div class="col-md-4">
                <h4>DOWNLOAD OUR FREE MOBILE APPS</h4>
                <ul>
                    <li><a href="#"><span class="sprite sprite-android"></span></a>
                    </li>
                    <li><a href="#"><span class="sprite sprite-ios"></span></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>SOCIAL MEDIA</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>




<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
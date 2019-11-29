<?php
session_start();
ob_start();
//error_reporting(~E_ALL);
if (!isset($_SESSION['lastname'])) {
    header("location:index.php?login_first");
}
if (isset($_GET['logout'])) {
    if ($_GET['logout'] == 'ok') {
        session_destroy();
        header("location:index.php?logout_is_ok");
    }
}
?>

<!--------------------------------------------dashbord-main------------------------------------>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">


    <title> مجموعه فرهنگی ورزشی برنا</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="assets/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <link href="css/mecss.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/aa.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="#" class="logo">مجموعه فرهنگی ورزشی<span> برنا </span></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu" >
            <div class="sorting_1" style="width: 50px;height: 40px;"><!--====================   برای نشان دادن اقایان و بانوان=====================================-->
                <?php
                if ($_SESSION['lastname']=='مهدیلو' || $_SESSION['lastname']=='بختیاری' || $_SESSION['lastname']=='میخچی' || $_SESSION['lastname']=='گیاهی' || $_SESSION['lastname']=='a' ){
                    echo " <span class=\"label label-primary\" >اقایان</span>";
                }elseif ($_SESSION['lastname']=='احمدی' || $_SESSION['lastname']=='فیاضی'|| $_SESSION['lastname']=='a'){
                    echo " <span class=\"label label-danger\" >بانوان</span>";
                }
                ?>
            </div>
        </div>
        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="img/avatar1_small.jpg">
                        <span class="username"><?php echo $_SESSION['lastname']; ?> </span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="dashbord.php?logout=ok"><i class="icon-key"></i>خروج</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="dashbord.php?contact=index">
                        <i class="icon-dashboard"></i>
                        <span>صفحه اصلی</span>
                    </a>
                </li>
                <li><a class="" href="dashbord.php?contact=sabtname">ثبت نام </a></li>
                <li><a class="" href="dashbord.php?contact=payShahrie">پرداخت شهریه</a></li>
                <li><a class="" href="dashbord.php?contact=search">جستجو </a></li>
                <li class="sub-menu">
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>شنا</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="dashbord.php?contact=sabt_swime"> ثبت نام شنا</a></li>
                        <li><a class="" href="dashbord.php?contact=list_swime"> لیست شنا</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>ماساژ</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="dashbord.php?contact=add_mos">بلیط ماساژ</a></li>
                        <li><a class="" href="dashbord.php?contact=list_mos"> لیست ماساژ</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>گزارش ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="dashbord.php?contact=go_sabt_day">گزارش ثبت نام روز</a></li>
                        <li><a class="" href="dashbord.php?contact=go_sabt_month">گزارش ثبت نام ماه</a></li>
                        <li><a class="" href="dashbord.php?contact=go_shahr_day">گزارش شهریه روز</a></li>
                        <li><a class="" href="dashbord.php?contact=go_shahr_month">گزارش شهریه ماه</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>لیست ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="dashbord.php?contact=list_reshte"> لیست رشتهای ورزشی</a></li>
                        <li><a class="" href="dashbord.php?contact=list_varzeshkar"> لیست ورزشکاران</a></li>
                    </ul>
                </li>
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-book"></i>
                            <span>تنظیمات</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="dashbord.php?contact=reshte"> تعریف رشته ورزشی</a></li>
                            <li><a class="" href="dashbord.php?contact=tagir_tbl">تغییر جداول</a></li>
                        </ul>
                    </li>
            </ul>
        </div>
    </aside>
    <section id="main-content">
        <section class="wrapper">
            <?php
            include_once 'app/component/jdf.php';
			if ($_SESSION['lastname']=='مهدیلو' || $_SESSION['lastname']=='بختیاری' || $_SESSION['lastname']=='میخچی' || $_SESSION['lastname']=='گیاهی' || $_SESSION['lastname']=='a' ){
                include_once 'app/database_users/db.php';
				$obj=new db;
                }elseif ($_SESSION['lastname']=='احمدی' || $_SESSION['lastname']=='فیاضی'|| $_SESSION['lastname']=='a'){
                include_once 'app/database_users/dbw.php';
				$obj=new dbw;
            }

            if (isset($_GET['contact'])) {
                if ($_GET['contact'] == 'index') {
                    include_once 'app/index.php';
                }
                elseif ($_GET['contact'] == 'list_reshte')
                {
                    include_once 'app/listContent/list_reshte.php';
                }
                elseif ($_GET['contact'] == 'list_varzeshkar')
                {
                    include_once 'app/listContent/list_varzashkar.php';
                }
                elseif ($_GET['contact'] == 'sabtname')
                {
                    include_once 'app/setContent/sabtname.php';
                }
                elseif ($_GET['contact'] == 'payShahrie')
                {
                    include_once 'app/setContent/payShahrie.php';
                }elseif ($_GET['contact'] == 'pay_payShahrie')
                {
                    include_once 'app/setContent/pay_payShahrie.php';
                }elseif ($_GET['contact'] == 'reshte')
                {
                    include_once 'app/setContent/reshte.php';
                }elseif ($_GET['contact'] == 'reshteVarzeshi')
                {
                    include_once 'app/listContent/list_reshteVarzeshi.php';
                }elseif ($_GET['contact'] == 'search')
                {
                    include_once 'app/listContent/list_search.php';
                }elseif ($_GET['contact'] == 'sabt_swime')
                {
                    include_once 'app/swime/sabtname_swime.php';
                }elseif ($_GET['contact'] == 'list_swime')
                {
                    include_once 'app/swime/list_swime.php';
                }elseif ($_GET['contact'] == 'list_swime_full')
                {
                    include_once 'app/swime/list_swime_full.php';
                }elseif ($_GET['contact'] == 'add_mos')
                {
                    include_once 'app/masaje/sabt_masaje.php';
                }elseif ($_GET['contact'] == 'list_mos')
                {
                    include_once 'app/masaje/list_masaje.php';
                }elseif ($_GET['contact'] == 'go_sabt_day')
                {
                    include_once 'app/gozaresh/go_sabt_day.php';
                }elseif ($_GET['contact'] == 'go_sabt_month')
                {
                    include_once 'app/gozaresh/go_sabt_month.php';
                }elseif ($_GET['contact'] == 'go_shahr_day')
                {
                    include_once 'app/gozaresh/go_shahr_day.php';
                }elseif ($_GET['contact'] == 'go_shahr_month')
                {
                    include_once 'app/gozaresh/go_shahr_month.php';
                }elseif ($_GET['contact'] == 'tagir_tbl')
                {
                    include_once 'app/setContent/tagir_tbl.php';
                }elseif ($_GET['contact'] == 'joziat')
                {
                    include_once 'app/gozaresh/go_joziat.php';
                }elseif ($_GET['contact'] == 'list_swime_full_m')
                {
                    include_once 'app/swime/list_swime_full_m.php';
                }elseif ($_GET['contact'] == 'list_swime_full_m_Show')
                {
                    include_once 'app/swime/list_swime_full_m_Show.php';
                }
            }
            ?>
        </section>
    </section>
</section>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="assets/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
<script src="assets/jquery-file-upload/js/vendor/tmpl.min.js"></script>
<script src="assets/jquery-file-upload/js/vendor/load-image.min.js"></script>
<script src="assets/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
<script src="assets/jquery-file-upload/js/jquery.iframe-transport.js"></script>
<script src="assets/jquery-file-upload/js/jquery.fileupload.js"></script>
<script src="assets/jquery-file-upload/js/jquery.fileupload-fp.js"></script>
<script src="assets/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
<script src="js/common-scripts.js"></script>

</body>
</html>

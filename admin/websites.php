<?php
/**
 * Created by PhpStorm.
 * User: ormazd
 * Date: 8/25/2020
 * Time: 4:01 PM
 */
session_start();
include("../lib/php/lib_include.php");
include("check_admin_session.php");
?>
<!DOCTYPE html>
<html>
<title>تعریف وبسایت</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../lib/js/jquery.js"></script>
<script src="js/fnuser.js"></script>
<script src="js/modal.js"></script>
<style>
    html, body, h1, h2, h3, h4, h5 {
        font-family: Tahoma;
    }

    body {
        font-size: 12px;
    }
</style>
<body class="w3-light-grey" style="direction: rtl;">

<!-- Top container -->
<?php
include("top.php");
?>
<!-- Sidebar/menu -->
<?php
include("nav.php");
?>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
     title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-right:300px;margin-top:43px;">

    <!-- Header -->
    <header class="w3-container" style="padding-top:22px;">
        <h5><b><i class="fa fa-dashboard"></i>تعریف وبسایت</b></h5>
    </header>
    <div class="w3-white w3-padding-large w3-margin w3-round-medium w3-right" style="width: 80%;">
        <?php
        $fm = new makeform();
        $fm->set_tbl_key("website", "user", 0);
        $fm->fast_string_input("نام کاربری", "user", "user", 1, 1, 1);
        $fm->fast_password_input("کلمه عبور", "pass", "pass");
        $fm->fast_string_input("عنوان فروشگاه", "title", "title", 1, 1, 1);
        $fm->fileinput("لوگو", "logo", "w3-input w3-border", "w3-text-green", 0);
        $fm->fast_textarea("کلمات کلیدی", "keywords", "keywords");
        $fm->fast_textarea("معرفی کوتاه", "disc", "disc");
        $fm->fast_textarea("درباره فروشگاه", "about", "about");
        $fm->fast_string_input("شماره تماس 1", "tel1", "tel1", 1, 1, 1);
        $fm->fast_string_input("شماره تماس 2", "tel2", "tel2", 0, 0, 1);
        $fm->fast_string_input(" تلفن همراه 1", "mob1", "mob1", 1, 1, 1);
        $fm->fast_string_input("تلفن همراه 2", "mob2", "mob2", 0, 0, 1);
        $fm->fast_string_input("کد پستی", "post_code", "post_code");
        $fm->fast_string_input("ایمیل", "email", "email", 1);
        $fm->fast_string_input("اینستاگرام", "instagram", "instagram");
        $fm->fast_string_input("تلگرام", "telegram", "telegram");
        $fm->fast_string_input("فیس بوک", "facebook", "facebook");
        $fm->fast_string_input("لینکدین", "linkedin", "linkedin");
        $fm->fast_string_input("توئیتر", "tweeter", "tweeter");
        $fm->fast_string_input("تاریخ ثبت نام", "reg_date", "reg_date", 1, 1);
        $fm->fast_string_input("تاریخ اتمام", "exp_date", "exp_date", 1, 1);
        $fm->submit();
        $fm->addform();
        $fm->show();
        ?>

    </div>
    <!-- End page content -->
</div>
<?php
include("footer.php");
?>
</body>
</html>
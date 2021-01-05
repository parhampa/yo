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
<title>بلاگ</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../lib/js/jquery.js"></script>
<script src="../lib/js/palib.js"></script>
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
        <h5><b><i class="fa fa-dashboard"></i>بلاگ</b></h5>
    </header>
    <div class="w3-white w3-padding-large w3-margin w3-round-medium w3-right" style="width: 80%;">
        <?php
        $fm = new makeform();
        $wuser = $_SESSION['user'];
        $fm->set_where_edit(" `wuser`='$wuser'");
        $fm->deletewhere(" `wuser`='$wuser'");
        $fm->setwhere(" `wuser`='$wuser'");
        $fm->set_tbl_key("blog", "id", 1);
        $fm->set_str_val("wuser", $wuser);
        $fm->label("دسته پدر", "w3-text-green")
            ->select()
            ->selectname("fcat_id")
            ->selectid("fcat_id")
            ->selectclasses("w3-select w3-border fcatcls")
            ->select_onchange("loadsubcat()")
            ->selectaddval("0", "بدون دسته")
            ->selectdb("cat", "name", "id", "", "where `wuser`='$wuser' and `fid`=0 and `type`=0")
            ->end()
            ->sndform("fcat_id", 2, 1, "دسته پدر", 1, 1);
        $fm->label("دسته بندی", "w3-text-green")
            ->select()
            ->selectname("cat_id")
            ->selectid("cat_id")
            ->selectclasses("w3-select w3-border")
            ->selectdb("cat", "name", "id", "", "where `wuser`='$wuser' and `type`=0")
            ->end()
            ->sndform("cat_id", 2, 1, "دسته بندی", 1, 1);
        $fm->fast_string_input("عنوان مطلب", "title", "title", 1, 1, 1);
        $fm->fast_textarea("خلاصه مطلب", "short_txt", "short_txt", 1);
        $fm->fast_textarea("متن کامل", "txt", "txt", 1);
        $fm->fileinput("تصویر 1", "pic1", "w3-input w3-border", "w3-text-green");
        $fm->fileinput("تصویر 2", "pic2", "w3-input w3-border", "w3-text-green");
        $fm->fileinput("تصویر 3", "pic3", "w3-input w3-border", "w3-text-green");
        $fm->fast_textarea("کلمات کلیدی", "kewords", "kewords", 1);
        $fm->set_str_val("pdate", date("Y-m-d"));
        $fm->set_int_val("visit", 0);
        $fm->submit();
        $fm->addform();
        $fm->show();
        ?>

    </div>
    <!-- End page content -->
</div>
<script>
    function loadsubcat() {
        postobj.post_url = "usercats.php";
        postobj.send_type = "post";
        postobj.after_success = function (data) {
            document.getElementById('cat_id').innerHTML = data;
        }
        res_obj_postdata("fcatcls");
    }

</script>

<?php
include("footer.php");
?>
</body>
</html>
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
<title>منو</title>
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
        <h5><b><i class="fa fa-dashboard"></i>منو</b></h5>
    </header>
    <div class="w3-white w3-padding-large w3-margin w3-round-medium w3-right" style="width: 80%;">
        <?php
        $fm = new makeform();
        $fm->set_tbl_key("menu", "id", 1);
        //$fm->fast_string_input("نام کاربری", "wuser", "wuser", 1, 1, 1);
        $fm->label("نام کاربری", "w3-text-green")
            ->input()
            ->inpname("wuser")
            ->inpid("wuser")
            ->inpclasses("w3-input w3-border usersrc")
            ->end()
            ->sndform("wuser", 0, 1, "نام کاربری", 1, 1);
        $fm->input()
            ->inptype("button")
            ->inpclasses("w3-btn w3-green w3-round w3-margin")
            ->inpval("جستجو")
            ->onclick("loadfmenus()")
            ->end();
        $fm->all .= "<br>";
        $fm->fast_string_input("عنوان منو", "title", "title", 1, 1, 1);
        $fm->fast_string_input("لینک", "link", "link", 1);
        $fm->label("منوی پدر", "w3-text-green")
            ->select()
            ->selectname("fid")
            ->selectid("fid")
            ->selectclasses("w3-select w3-border")
            ->selectaddval("0", "بدون پدر")
            ->selectdb("menu", "title", "id")
            ->end()
            ->sndform("fid", 2, 1, "منوی پدر");
        $fm->label("محل قرارگیری", "w3-text-green")
            ->select()
            ->selectname("place")
            ->selectid("place")
            ->selectclasses("w3-select w3-border")
            ->selectaddval("0", "منوی بالای صفحه")
            ->selectaddval("1", "منوی پایین صفحه")
            ->end()
            ->sndform("place", 2, 1, "place", 1);
        $fm->fast_number_input("ترتیب نمایش", "ordernumber", "ordernumber", 1);
        $fm->submit();
        $fm->addform();
        $fm->show();
        ?>

    </div>
    <!-- End page content -->
</div>
<script>
    function loadfmenus() {
        if (document.getElementById('wuser').value == "") {
            alert("لطفا نام کاریری را وارد نمایید.");
            return;
        }
        postobj.post_url = "usermenus.php";
        postobj.send_type = "post";
        postobj.after_success = function (data) {
            document.getElementById('fid').innerHTML = data;
        }
        res_obj_postdata("usersrc");
    }

</script>
<?php
include("footer.php");
?>
</body>
</html>
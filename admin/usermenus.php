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
$ml = new mobile_input();
$user = $ml->set_name("wuser")
    ->set_title("نام کاریری")
    ->set_important(true)
    ->post_str();
$sql = "select * from `menu` where `wuser`='$user' and `fid`=0";
$db = new database();
$db->connect()->query($sql);
if ($db->res) {
    ?>
    <option value="0">بدون منوی پدر</option> <?php
    while ($fild = mysqli_fetch_assoc($db->res)) {
        ?>
        <option value="<?php echo($fild['id']); ?>"><?php echo($fild['title']); ?></option> <?php
    }
}
?>
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
$fid = $ml->set_name("fcat_id")
    ->set_title("دسته پدر")
    ->set_important(true)
    ->post_int();
$wuser = $_SESSION['user'];
$sql = "select * from `cat` where `id`=$fid and`wuser`='$wuser'";
$db = new database();
$db->connect()->query($sql);
$ftitle = "";
if (mysqli_num_rows($db->res) > 0) {
    $fild = mysqli_fetch_assoc($db->res);
    $ftitle = $fild['name'];
}
$sql = "select * from `cat` where `wuser`='$wuser' and `fid`=$fid";
$db = new database();
$db->connect()->query($sql);
if ($db->res) {
    ?>
    <option value="<?php echo($fid); ?>"><?php echo($ftitle); ?></option> <?php
    while ($fild = mysqli_fetch_assoc($db->res)) {
        ?>
        <option value="<?php echo($fild['id']); ?>"><?php echo($fild['name']); ?></option> <?php
    }
}
?>
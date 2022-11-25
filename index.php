<?php
require_once 'model/pdo.php';
require_once 'model/nguoiDung.php';
require_once 'model/setting.php';
require_once 'model/slider.php';
require_once 'model/diadiem.php';
require_once 'model/theloai.php';
require_once 'model/tour.php';

//controler
$setting=select_st();
$slider=select_all_slider();
$diadiem=select_all_dd();
$theloai=select_all_tl();
$theloai_top5=select_all_tl_top5();
$tournew=tour_new();
$danhmuc_diadiem_top_dow=select_top_dow();
$danhmuc_diadiem_top_up=select_top_up();
$danhmuc_diadiem_top_dow_1=select_top_dow_1();
$tour_uudai=tour_uudai();
$cate=select_all_t('');
include 'view/header.php';
if (isset($_GET['act'])) {
    $act=$_GET['act'];
    switch ($act) {
        case 'dangki':
            if (isset($_POST['btn_signup'])) {
               $name=$_POST['name']; 
               $address=$_POST['address'];
               $username=$_POST['username'];
               $tel=$_POST['tel'];
               $pass=$_POST['pass'];
               $repass=$_POST['repass'];
               $email=$_POST['email'];
               if ($pass==$repass) {
               insert_user_form($name,$address,$tel,$email,$username,$pass);
               $tb='<p class="px-2">Dang ki thanh cong</p>';
               }
            }
            include 'view/dangki.php';
            break;
        case 'dangnhap':
            echo 'hello boi';
            break;
        case 'destination':

                include 'view/destination.php';
                break;
        case 'chitietdiemden':
            if(isset($_GET['id'] )){
                $id=$_GET['id'];
                $diadiem_id=select_dd_one($id);
            }
            include 'view/chitietdiemden.php';
        break;
        default:
            include 'view/home.php';
        break;
    }
}else {
include 'view/home.php';
}
include 'view/footer.php';
?>
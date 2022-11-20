<?php
require_once "../model/pdo.php";
require_once '../model/nguoiDung.php';
require_once '../model/uudai.php';
require_once '../model/slider.php';

include_once 'header.php';
// Controller
if (isset($_GET['act'])) {
    $act=$_GET['act'];
    switch ($act) {
        case 'add_user':
            if(isset($_POST['btn_insert_add'])) {
                $name=$_POST['ten'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $tel=$_POST['tel'];
                $username=$_POST['username'];
                $pass=$_POST['password'];
                $role=$_POST['role'];
                $img=$_FILES['img_user'];
                $image_name=$img['name'];
                move_uploaded_file($img['tmp_name'],"../image/".$image_name);
                insert_user($name,$address,$tel,$email,$image_name,$username,$pass,$role);
                $tb='Them thanh cong';
            }   
            include 'nguoiDung/add.php';
            break;
        case 'chitiet_user':
            if (isset($_GET['id'])) {
                $id=$_GET['id'];
                $user=select_user_id($id);
            }
            include 'nguoiDung/detail.php';
            break;
        case 'edit_user':
            if (isset($_GET['id'])) {
                $id=$_GET['id'];
                $user=select_user_id($id);
            }
            include 'nguoiDung/edit.php';
            break;
        case 'update_user':
            if (isset($_POST['btn_update'])) {
                $id=$_POST['id'];
                $name=$_POST['ten'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $tel=$_POST['tel'];
                $username=$_POST['username'];
                $pass=$_POST['password'];
                $role=$_POST['role'];
                if ($_FILES['img_user']['name']!='') {
                    $img=$_FILES['img_user'];
                    $image_name=$img['name'];
                    move_uploaded_file($img['tmp_name'],"../image/".$image_name);
                }else{
                    $image_name=$_POST['img'];
                }
                update_user_id($name,$address,$tel,$email,$image_name,$username,$pass,$role,$id);
            }
            $list_user=select_user_all();
            include 'nguoiDung/list.php';
            break; 
        case 'del_user':
            if (isset($_GET['id'])) {
                Delete_user($_GET['id']);
            }
            $list_user=select_user_all();
            include 'nguoiDung/list.php';
            break; 
        case 'tai_khoan':
            $list_user=select_user_all();
            include 'nguoiDung/list.php';
            break;
        case 'slider':
            $list_sl=select_all_slider();
            include 'slider/list.php';
            break;
        case 'edit_sl':
            if (isset($_GET['id'])) {
                $slider=select_one_slider($_GET['id']);
            }
            include 'slider/edit.php';
            break;
        case 'update_sl':
                if (isset($_POST['btn_update'])) {
                    $name=$_POST['name'];
                    $url=$_POST['url'];
                    $moTa=$_POST['moTa'];
                    $id=$_POST['id'];
                    if ($_FILES['file']['name']!='') {
                        $img=$_FILES['file'];
                        $image_name=$img['name'];
                        move_uploaded_file($img['tmp_name'],"../image/".$image_name);
                    }else {
                        $image_name=$_POST['img'];
                    }
                    update_sl($name,$image_name,$moTa,$url,$id);
                }
            $list_sl=select_all_slider();
            include 'slider/list.php';
            break;
        case 'del_sl':
                if (isset($_GET['id'])) {
                    delete_sl($_GET['id']);
                }
                $list_sl=select_all_slider();
                include 'slider/list.php';
            break;
        case 'add_slider':
            if (isset($_POST['btn_insert'])) {
                $name =$_POST['name'];
                $url=$_POST['url'];
                $moTa=$_POST['moTa'];
                $img=$_FILES['img'];
                $image_name=$img['name'];
                move_uploaded_file($img['tmp_name'],"../image/".$image_name);
                insert_slider($name,$image_name,$moTa,$url);
                $tb='Them thanh cong';
            }
            include 'slider/add.php';
            break;
        case 'add_ud':
                if (isset($_POST['btn_insert_ud'])) {
                    $name=$_POST['name'];
                    $giaTri=$_POST['giaTri'];
                    $start = date('Y-m-d', strtotime($_POST['dateFrom']));
                    $end = date('Y-m-d', strtotime($_POST['date']));
                    insert_ud($name,$giaTri,$start,$end);
                }
            include 'uudai/add.php';
            break;
        case 'edit_ud':
            if (isset($_GET['id'])) {
                $uu_dai=select_one($_GET['id']);
            }
            include 'uudai/edit.php';
            break;
        case 'up_ud':
            if (isset($_POST['btn_update'])) {
                $name=$_POST['name'];
                $giaTri=$_POST['giaTri'];
                $start = date('Y-m-d', strtotime($_POST['start']));
                $end = date('Y-m-d', strtotime($_POST['end']));
                $id=$_POST['id'];
                update_ud($name,$giaTri,$start,$end,$id);
            }
            $list_ud=select_all();
            include 'uudai/list.php';
            break;
        case 'del_ud':
            if (isset($_GET['id'])) {
                delete_ud($_GET['id']);
            }
            $list_ud=select_all();
            include 'uudai/list.php';
            break;
        case 'uu_dai':
            $list_ud=select_all_ud();
            include 'uudai/list.php';
            break;
        case 'dia_diem':
            echo 'dia diem';
            break;
        case 'tour':
            echo 'Tour du lich';
            break;
        case 'the_loai':
            echo 'The loai';
            break;
        case 'dich_vu':
            echo 'Dich vu day e oi';
            break;
        case 'danh_gia':
            echo 'Danh gia';
            break;
        case 'bill':
            echo 'Don hang';
            break;
        case 'binh_luan':
            echo 'Binh luan';
            break;
        case 'blog':
            echo 'thong ke';
            break;
        case 'setting':
            echo 'Setting';
            break;
        case 'thong_ke':
            echo 'Thong ke ban a';
            break;
        default:
            echo 'khong tim thay ';
            break;
    }
}else{
    include_once '../admin/home.php';
}
include_once 'footer.php';

?>
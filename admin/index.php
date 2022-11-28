<?php
require_once "../model/pdo.php";
require_once '../model/nguoiDung.php';
require_once '../model/uudai.php';
require_once '../model/slider.php';
require_once '../model/theloai.php';
require_once '../model/diadiem.php';
require_once '../model/tour.php';
require_once '../model/setting.php';
require_once '../model/erorr.php';
require_once '../model/blog.php';
require_once '../model/binhluan.php';
require_once '../model/bill.php';

include_once 'header.php';
// Controller
// bien tong
$list_dd=select_all_dd('');
$list_tl=select_all_tl();
$list_ud=select_all_ud();
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
                if ((empty(eror_user($name))&&empty(eror_user($email))&&empty(eror_user($address))&&empty(eror_user($tel))&&empty(eror_user($address))&&empty(eror_user($username))&&empty(eror_user($pass)))) {
                    move_uploaded_file($img['tmp_name'],"../image/".$image_name);
                    insert_user($name,$address,$tel,$email,$image_name,$username,$pass,$role);
                    $tb='Them thanh cong';
                }
            }else {
                $name='';
                $email='';
                $address='';
                $tel='';
                $username='';
                $pass='';
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
            if (isset($_POST['btn_search'])) {
                $kyw=$_POST['kyw'];
            }else {
                $kyw='';
            }
            $list_user=select_user_all($kyw);
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
                if (empty(eror_user($name))&&empty(eror_user($url))&&empty(eror_user($moTa))) {
                    move_uploaded_file($img['tmp_name'],"../image/".$image_name);
                    insert_slider($name,$image_name,$moTa,$url);
                    $tb='Them thanh cong';
                }
            }else {
                $name='';
                $url='';
                $moTa='';
            }
            include 'slider/add.php';
            break;
        case 'add_ud':
                if (isset($_POST['btn_insert_ud'])) {
                    $name=$_POST['name'];
                    $giaTri=$_POST['giaTri'];
                    $start = date('Y-m-d', strtotime($_POST['dateFrom']));
                    $end = date('Y-m-d', strtotime($_POST['date']));
                    if (empty(eror_user($name))&&empty(eror_user($giaTri))) {
                        insert_ud($name,$giaTri,$start,$end);
                        $tb='Them thanh cong';
                    } 
                }else {
                    $name='';
                    $giaTri='';
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
        case 'add_dd':
            if (isset($_POST['btn_insert'])) {
                $name=$_POST['name'];
                $img=$_FILES['file'];
                $image_name=$img['name'];
                $noiDung=$_POST['noiDung'];
                move_uploaded_file($img['tmp_name'],"../image/".$image_name);
                insert_dd($name,$image_name,$noiDung);
                $tb='Thêm thành công';
            }
            include 'diaDiem/add.php';
            break;
        case 'dia_diem':
            if (isset($_POST['btn_search'])) {
                $kyw=$_POST['kyw'];
            }else {
                $kyw='';
            }
            $list_dd=select_all_dd($kyw);
            include 'diaDiem/list.php';
            break;
        case 'del_dd':
            if (isset($_GET['id'])) {
                delete_dd($_GET['id']);
            }
            $list_dd=select_all_dd('');
            include 'diaDiem/list.php';
            break;
        case 'update_dd':
            if (isset($_POST['btn_update'])) {
                $id=$_POST['id'];
                $name=$_POST['name'];
                $noiDung = $_POST['noiDung'];
                if ($_FILES['file']['name']!='') {
                    $img=$_FILES['file'];
                    $image_name=$img['name'];
                    move_uploaded_file($img['tmp_name'],"../image/".$image_name);
                }else{
                    $image_name=$_POST['img'];
                }
                update_dd($id,$name,$noiDung,$image_name);
            }
            $list_dd=select_all_dd('');
            include 'diaDiem/list.php';
            break;
        case 'edit_dd':
            if (isset($_GET['id'])) {
                $diaDiem=select_dd_one($_GET['id']);
            }
            include 'diaDiem/edit.php';
            break;
        case 'add_t':
            if (isset($_POST['btn_insert'])) {
                $name=$_POST['name'];
                $address_t=$_POST['address_tour'];
                $price=$_POST['price'];
                $id_address=$_POST['diadiem'];
                $soLuong=$_POST['soluong'];
                $soNgay=$_POST['soNgay'];
                $img=$_FILES['file'];
                $image_name=$img['name'];
                
                $magiamgia=$_POST['giamGia'];
                $loai=$_POST['loai'];
                $moTa=$_POST['moTa'];
                if (empty(eror_user($name))&&empty(eror_user($address_t))&&empty(eror_user($price))&&empty(eror_user($soLuong))&&empty(eror_user($soNgay))&&empty(eror_user($moTa))) {
                move_uploaded_file($img['tmp_name'],"../image/".$image_name);
                insert_t($id_address,$loai,$name,$price,$soLuong,$moTa,$address_t,$image_name,$soNgay,$magiamgia);
                $tb='Them Thanh cong';
                }
            }else {
                $name='';
                $address_t='';
                $price='';
                $soLuong='';
                $soNgay='';
                $moTa='';
            }
            include 'tour/add.php';
            break;
        case 'update_t':
            if (isset($_POST['btn_update'])) {
                $id=$_POST['id'];
                $name=$_POST['name'];
                $address_tour=$_POST['address_tour'];
                $price=$_POST['price'];
                $diaDiem=$_POST['diaDiem'];
                $soLuong=$_POST['soLuong'];
                $soNgay=$_POST['soNgay'];
                if ($_FILES['file']['name']!='') {
                    $img=$_FILES['file'];
                    $image_name=$img['name'];
                    move_uploaded_file($img['tmp_name'],"../image/".$image_name);
                }else{
                    $image_name=$_POST['img'];
                }
                // $giamGia=$_POST['giamGia'];
                $loai=$_POST['loai'];
                $moTa=$_POST['moTa'];
                $giamGia=$_POST['giamGia'];
                update_t($diaDiem,$loai,$name,$price,$soLuong,$moTa,$address_tour,$image_name,$soNgay,$giamGia,$id);
            }
            $list_t=select_all_t();
            include 'tour/list.php';
            break;
        case 'del_t':
                if (isset($_GET['id'])) {
                    delete_t($_GET['id']);
                }
                $list_t=select_all_t();
                include 'tour/list.php';
            break;
        case 'edit_t':
            if (isset($_GET['id'])) {
                $tour=select_t_one($_GET['id']);
            }
            include 'tour/edit.php';
            break;
        case 'chitiettour':
            if (isset($_GET['id'])) {
                $tour=select_t_one($_GET['id']);
                $loai=select_tl_one($tour['id_loai']);
                $diadiem=select_dd_one($tour['id_address']);
            }
            include 'tour/detail.php';
            break;
        case 'tour':
            if (isset($_POST['btn_search'])) {
                $kyw=$_POST['kyw'];
            }else {
                $kyw='';
            }
            $list_t=select_all_t($kyw);
            include 'tour/list.php';
            break;
        case 'add_tl':
                if (isset($_POST['btn_insert'])) {
                    $name=$_POST['name'];
                    if (empty(eror_user($name))) {
                        insert_tl($name);
                        $tb='Them Thanh cong';
                    }
                }else {
                    $name='';
                }
                include 'theloai/add.php';
            break;
        case 'update_tl':
                if (isset($_POST['btn_update'])) {
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    update_tl($name,$id);
                }
                $list_tl=select_all_tl();
                include 'theloai/list.php';
            break;
        case 'del_tl':
                if (isset($_GET['id'])) {
                    del_tl($_GET['id']);
                }
                $list_tl=select_all_tl();
                include 'theloai/list.php';
                break;
        case 'edit_tl':
                if (isset($_GET['id'])) {
                    $loai=select_tl_one($_GET['id']);
                    include 'theloai/edit.php';
                }
            break;
        case 'the_loai':
            $list_tl=select_all_tl();
            include 'theloai/list.php';
            break;
        case 'dich_vu':
            echo 'Dich vu day e oi';
            break;
        case 'danh_gia':
            echo 'Danh gia';
            break;
        case 'bill':
            $list_bill = select_all_bill();
            include "bill/list.php";
            break;
        case 'chapnhan':
            $id=$_GET['id'];
            chapnhan_bill($id);
            $list_bill = select_all_bill();
            include "bill/list.php";
            break;
        case 'huy':
            $id=$_GET['id'];
            huy_bill($id);
            $list_bill = select_all_bill();
            include "bill/list.php";
            break;
        case 'binh_luan':
            $list_b = select_all_b('');
            if (isset($_POST['btn_search'])) {
                $kyw=$_POST['kyw'];
            }else {
                $kyw='';
            }
            $list_bl=select_all_bl($kyw);
            include 'binhluan/list.php';
            break;
        case 'del_bl':
            if (isset($_GET['id'])) {
                delete_bl($_GET['id']);
            }
            $list_bl=select_all_bl('');
            include 'binhluan/list.php';
            break;
        case 'blog':
            if (isset($_POST['btn_search'])) {
                $kyw=$_POST['kyw'];
            }else {
                $kyw='';
            }
            $list_b=select_all_b($kyw);
            include "blog/list.php";
            break;
        case 'add_b':
            if (isset($_POST['btn_insert'])) {
                $name=$_POST['name'];
                $img=$_FILES['file'];
                $image_name=$img['name'];
                $noiDung=$_POST['noiDung'];
                move_uploaded_file($img['tmp_name'],"../image/".$image_name);
                insert_b($name,$image_name,$noiDung);
                $tb='Thêm thành công';
            }
            include 'blog/add.php';
            break;
        case 'update_b':
            if (isset($_POST['btn_update'])) {
                $id=$_POST['id'];
                $name=$_POST['name'];
                $noiDung = $_POST['noiDung'];
                if ($_FILES['file']['name']!='') {
                    $img=$_FILES['file'];
                    $image_name=$img['name'];
                    move_uploaded_file($img['tmp_name'],"../image/".$image_name);
                }else{
                    $image_name=$_POST['img'];
                }
                update_b($id,$name,$noiDung,$image_name);
            }
            $list_b=select_all_b('');
            include 'blog/list.php';
            break;
        case 'del_b':
            if (isset($_GET['id'])) {
                delete_b($_GET['id']);
            }
            $list_b=select_all_b('');
            include 'blog/list.php';
            break;
        case 'edit_b':
            if (isset($_GET['id'])) {
                $blog = select_b_one($_GET['id']);
            }
            include 'blog/edit.php';
            break;
        case 'setting':
            if (isset($_POST['btn_insert'])) {
                $name=$_POST['name'];
                if ($_FILES['file']['name']!='') {
                    $img=$_FILES['file'];
                    $image_name=$img['name'];
                    move_uploaded_file($img['tmp_name'],"../image/".$image_name);
                }else{
                    $image_name=$_POST['img'];
                }
                
                $address=$_POST['address'];
                $tel=$_POST['tel'];
                $email=$_POST['email'];
                $fb=$_POST['fb'];
                update_st($name,$image_name,$address,$tel,$email,$fb);
            }
            if (isset($_GET['id'])) {
                $getdata=select_st();
            }
            $setting=select_st();
            include 'setting/list.php';
            break;
        case 'thong_ke':
            $load_thongke=load_thongke_diadiem();
            foreach ($load_thongke as $data ) {
                $address[]=$data['address'];
                $tour[]=$data['Counttour'];
            }
            $load_thongke_loai=load_thongke_loai();
            foreach ($load_thongke_loai as $data) {
                $loai[]=$data['address'];
                $tour_loai[]=$data['Counttour'];
            }
            include 'thongke/thongke.php';
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
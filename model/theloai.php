<?php
function select_all_tl(){
    $sql="SELECT * FROM `theloai` WHERE 1";
    $list=pdo_query($sql);
    return $list;
}
function insert_tl($name){
    $sql="INSERT INTO `theloai`(`name`) VALUES ('$name')";
    pdo_execute($sql);
}
function select_tl_one($id){
    $sql="SELECT * FROM `theloai` WHERE id_loai=$id";
    $list=pdo_query_one($sql);
    return $list;
}
function update_tl($name,$id){
    $sql="UPDATE `theloai` SET `name`='$name' WHERE id_loai=$id";
    pdo_execute($sql);
}
function del_tl($id){
    $sql="DELETE FROM `theloai` WHERE id_loai=$id";
    pdo_execute($sql);
}
function select_all_tl_top5(){
    $sql="SELECT * FROM `theloai` WHERE 1 LIMIT 0,5";
    $list=pdo_query($sql);
    return $list;
}
?>

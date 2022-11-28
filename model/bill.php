<?php

function select_all_bill(){
    $sql="SELECT * FROM `bill`  ORDER BY id_bill desc";
    $list=pdo_query($sql);
    return $list;
}

function chapnhan_bill($id){
    $sql="UPDATE `bill` SET `trangThai`='1' WHERE id_bill = '$id'";
    pdo_execute($sql);
}

function huy_bill($id){
    $sql="UPDATE `bill` SET `trangThai`='3' WHERE id_bill = '$id'";
    pdo_execute($sql);
}
?>
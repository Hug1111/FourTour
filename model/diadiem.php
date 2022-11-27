<?php
function select_all_dd($string){
    $sql="SELECT * FROM `diadiem`";
    if ($string!='') {
        $sql.=" WHERE name_address LIKE '%$string%'";
    }
    $sql.=" ORDER BY id_address desc";
    $list=pdo_query($sql);
    return $list;
}
function select_dd_one($id){
    $sql="SELECT * FROM `diadiem` WHERE id_address=$id";
    $list=pdo_query_one($sql);
    return $list;
}
function insert_dd($name,$img,$noiDung){
    $sql="INSERT INTO `diadiem`(`name_address`, `image_dd`, `noidung1`) VALUES ('$name','$img','$noiDung')";
    pdo_execute($sql);
}
function update_dd($id,$name,$noiDung,$image_name){
    $sql="UPDATE `diadiem` SET `name_address`='$name',`image_dd`='$image_name',`noidung1`='$noiDung' WHERE id_address='$id'";
    pdo_execute($sql);
}
function delete_dd($id){
    $sql="DELETE FROM `diadiem` WHERE id_address=$id";
    pdo_execute($sql);
}
function select_top_dow(){
    $sql="SELECT * FROM `diadiem` WHERE 1 LIMIT 2,3";
    $list=pdo_query($sql);
    return $list;
}
function select_top_up(){
    $sql="SELECT * FROM `diadiem` WHERE 1 LIMIT 0,2;";
    $list=pdo_query($sql);
    return $list;
}
function select_top_dow_1(){
    $sql="SELECT * FROM `diadiem` WHERE 1 LIMIT 5,2";
    $list=pdo_query($sql);
    return $list;
}
function data_tree($data,$parent_id=1,$level=0){
    $reslut=[];
    foreach ($data as $item) {
        if ($item['id_address']==$parent_id) {
            $reslut[]=$item;
            // $child=data_tree($data,$item['id_tour'],$level+1);
            // $reslut=array_merge($reslut,$child);
        }
    }
    return $reslut;
}

?>
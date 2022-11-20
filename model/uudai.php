<?php
function select_all_ud(){
    $sql="SELECT * FROM `uudai` WHERE 1";
    $list_ud=pdo_query($sql);
    return $list_ud;
}
function insert_ud($name,$giatri,$start,$end){
    $sql="INSERT INTO `uudai`( `name`, `giaTri`, `ngaybatdau`, `ngayketthuc`) VALUES ('$name','$giatri','$start','$end')";
    pdo_execute($sql);
}
function select_one($id){
    $sql="SELECT * FROM `uudai` WHERE id_UD=$id";
    $uu_dai=pdo_query_one($sql);
    return $uu_dai;
}
function update_ud($name,$giaTri,$start,$end,$id){
    $sql="UPDATE `uudai` SET `name`='$name',`giaTri`='$giaTri',`ngaybatdau`='$start',`ngayketthuc`='$end' WHERE id_UD=$id";
    pdo_execute($sql);
}
function delete_ud($id){
    $sql="DELETE FROM `uudai` WHERE id_UD=$id";
    pdo_execute($sql);
}



?>

<?php
function select_all_bl($string){
    $sql="SELECT * FROM `binhluan`";
    if ($string!='') {
        $sql.=" WHERE id_blog LIKE '%$string%'";
    }
    $sql.=" ORDER BY id_bl desc";
    $list=pdo_query($sql);
    return $list;
}
function delete_bl($id){
    $sql="DELETE FROM `binhluan` WHERE id_bl=$id";
    pdo_execute($sql);
}
?>
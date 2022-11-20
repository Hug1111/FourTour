<?php
function insert_slider($name,$image_name,$moTa,$url){
    $sql="INSERT INTO `slider`(`name_slider`, `image_sl`, `moTa`, `url`) VALUES ('$name','$image_name','$moTa','$url')";
    pdo_execute($sql);
}
function select_all_slider(){
    $sql="SELECT * FROM `slider` WHERE 1";
    $list=pdo_query($sql);
    return $list;
}
function select_one_slider($id){
    $sql="SELECT * FROM `slider` WHERE id_slider=$id";
    $list=pdo_query_one($sql);
    return $list;
}
function update_sl($name,$img,$moTa,$url,$id){
    $sql="UPDATE `slider` SET `name_slider`='$name',`image_sl`='$img',`moTa`='$moTa',`url`='$url' WHERE id_slider=$id";
    pdo_execute($sql);
}
function delete_sl($id){
    $sql="DELETE FROM `slider` WHERE id_slider=$id";
    pdo_execute($sql);
}

?>
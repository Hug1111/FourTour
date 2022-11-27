<?php
function select_all_b($string){
    $sql="SELECT * FROM `blog`";
    if ($string!='') {
        $sql.=" WHERE title LIKE '%$string%'";
    }
    $sql.=" ORDER BY id_blog desc";
    $list=pdo_query($sql);
    return $list;
}
function select_b_one($id){
    $sql="SELECT * FROM `blog` WHERE id_blog=$id";
    $list=pdo_query_one($sql);
    return $list;
}
function insert_b($name,$img,$noiDung){
    $sql="INSERT INTO `blog`(`title`, `image_b`, `content`) VALUES ('$name','$img','$noiDung')";
    pdo_execute($sql);
}
function update_b($id,$name,$noiDung,$image_name){
    $sql="UPDATE `blog` SET `title`='$name',`image_b`='$image_name',`content`='$noiDung' WHERE id_blog='$id'";
    pdo_execute($sql);
}
function delete_b($id){
    $sql="DELETE FROM `blog` WHERE id_blog=$id";
    pdo_execute($sql);
}

?>
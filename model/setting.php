<?php
function insert_setting($name,$image_name,$address,$tel,$email,$fb){
    $sql="INSERT INTO `setting`(`tel`, `logo`, `website_url`, `address`, `email`, `facebook`) VALUES ('$tel','$image_name','$name','$address','$email','$fb')";
    pdo_execute($sql);
}
function select_st(){
    $sql="SELECT `tel`, `logo`, `website_url`, `address`, `email`, `facebook` FROM `setting` WHERE id_setting=1";
    $list=pdo_query_one($sql);
    return $list;
}
function update_st($name,$image_name,$address,$tel,$email,$fb){
    $sql="UPDATE `setting` SET `tel`='$tel',`logo`='$image_name',`website_url`='$name',`address`='$address',`email`='$email',`facebook`='$fb' WHERE id_setting=1";
    pdo_execute($sql);
}
?>
<?php
function insert_user($name,$address,$tel,$email,$img,$username,$pass,$role){
    $sql="INSERT INTO `nguoidung`(`name`, `address_user`, `tel`, `email`, `image_nd`, `username`, `pass`, `rolr`) VALUES ('$name','$address','$tel','$email','$img','$username','$pass',$role) ";
    pdo_execute($sql);
}
function select_user_all(){
    $sql="SELECT * FROM `nguoidung` WHERE 1";
    $list_user=pdo_query($sql);
    return $list_user;
}
function select_user_id($id){
    $sql="SELECT * FROM `nguoidung` WHERE id_user=$id";
    $list_user=pdo_query_one($sql);
    return $list_user;
}
function update_user_id($name,$address,$tel,$email,$img,$username,$pass,$role,$id){
    $sql="UPDATE `nguoidung` SET `name`='$name',`address_user`='$address',`tel`='$tel',`email`='$email',`image_nd`='$img',`username`='$username',`pass`='$pass',`rolr`='$role' WHERE `id_user`='$id' ";
    pdo_execute($sql);
}
function delete_user($id){
    $sql="DELETE FROM `nguoidung` WHERE id_user=$id";
    pdo_execute($sql);
}
?>
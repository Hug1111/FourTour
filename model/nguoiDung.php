<?php
function insert_user($name,$address,$tel,$email,$img,$username,$pass,$role){
    $sql="INSERT INTO `nguoidung`(`name`, `address_user`, `tel`, `email`, `image_nd`, `username`, `pass`, `rolr`) VALUES ('$name','$address','$tel','$email','$img','$username','$pass',$role) ";
    pdo_execute($sql);
}
function select_user_all($string){
    $sql="SELECT * FROM `nguoidung` ";
    if ($string!='') {
        $sql.=" WHERE name LIKE '%$string%'";
    }
    $sql.=" ORDER BY id_user desc";
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
function insert_user_form($name,$address,$tel,$email,$username,$pass){
    $sql="INSERT INTO `nguoidung`( `name`, `address_user`, `tel`, `email`, `username`, `pass`) VALUES ('$name','$address','$tel','$email','$username','$pass')";
    pdo_execute($sql);
}
?>
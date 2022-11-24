<?php 
function select_all_t($string){
    $sql="SELECT * FROM `tour`";
    if ($string!='') {
        $sql.=" WHERE name_tour LIKE '%$string%'";
    }
    $sql.=" ORDER BY id_tour desc";
    $list=pdo_query($sql);
    return $list;
}
function select_t_one($id){
    $sql="SELECT * FROM `tour` WHERE id_tour=$id";
    $list=pdo_query_one($sql);
    return $list;
}
function insert_t($id_address,$loai,$name,$price,$soLuong,$moTa,$address_t,$image_t,$soNgay,$giamGia){
    $sql="INSERT INTO `tour`(`id_address`, `id_loai`, `name_tour`, `price`, `soLuong`, `moTa`, `address_tour`, `image_t`, `soNgay`, `giamGia`) VALUES ('$id_address','$loai','$name','$price','$soLuong','$moTa','$address_t','$image_t','$soNgay','$giamGia')";
    pdo_execute($sql);
}
function update_t($id_address,$id_loai,$name,$price,$soLuong,$moTa,$address_t,$image_t,$soNgay,$giamGia,$id){
    $sql="UPDATE `tour` SET `id_address`='$id_address',`id_loai`='$id_loai',`name_tour`='$name',`price`='$price',`soLuong`='$soLuong',`moTa`='$moTa',`address_tour`='$address_t',`image_t`='$image_t',`soNgay`='$soNgay',`giamGia`='$giamGia' WHERE id_tour='$id' ";
    pdo_execute($sql);
}
function delete_t($id){
    $sql="DELETE FROM `tour` WHERE id_tour=$id";
    pdo_execute($sql);
}
function load_thongke_diadiem(){
    $sql="SELECT diadiem.name_address AS 'address' ,COUNT(tour.id_address) AS 'Counttour', MIN(tour.price)AS 'minprice',MAX(tour.price)AS'maxprice',AVG(tour.price)AS'avgprice' FROM tour LEFT JOIN diadiem ON tour.id_address=diadiem.id_address GROUP BY diadiem.id_address ORDER BY diadiem.id_address DESC;";
    $list=pdo_query($sql);
    return $list;
}
function load_thongke_loai(){
    $sql="SELECT theloai.name AS 'address' ,COUNT(tour.id_loai) AS 'Counttour', MIN(tour.price)AS 'minprice',MAX(tour.price)AS'maxprice',AVG(tour.price)AS'avgprice' FROM tour LEFT JOIN theloai ON tour.id_loai=theloai.id_loai GROUP BY theloai.id_loai ORDER BY theloai.id_loai DESC;";
    $list=pdo_query($sql);
    return $list;
}
function tour_new(){
    $sql="SELECT * FROM `tour` LEFT JOIN `diadiem` ON tour.id_address=diadiem.id_address ORDER BY id_tour DESC LIMIT 0,4;";
    $list=pdo_query($sql);
    return $list;
}
function tour_uudai(){
    $sql="SELECT * FROM `tour` JOIN `diadiem` ON tour.id_address=diadiem.id_address WHERE tour.giamGia!=0 ORDER BY tour.id_tour LIMIT 0,1;";
    $list=pdo_query_one($sql);
    return $list;
}
function test(){
    $sql="SELECT `id_tour`, `id_address` FROM `tour` WHERE 1 ORDER BY id_tour ;";
    $list=pdo_query($sql);
    return $list;
}
?>

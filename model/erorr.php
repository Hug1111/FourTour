<?php
function eror_user($string){
    $erorr=[];
    $flag=true;
    if ($string=='') {
        $flag=false;
        return $erorr['rong']='Vui long dien vao cho trong';
    }
    if (!empty($erorr)&&$flag==true) {
        return true;
    }
}
function eror_len($string){
    $erorr=[];
    $flag=true;
    if (strlen($string)!=10) {
        $flag=false;
        return $eror['tel']='Vui long nhap du 10 so';
    }
    if (!empty($erorr)&&$flag==true) {
        return true;
    }
}







?>
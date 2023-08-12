<?php
class binhluan{
    public function __construct(){}


    function insertcomment($mahh, $makh, $noidung){
        $db = new connect();
        $date= new DateTime("now");
        $datecreate=$date->format("Y-m-d");
        $query=" INSERT INTO binhluan1(mabl, mahh, makh, ngaybl, noidung) 
        value('', '".$mahh."', '".$makh."', '".$datecreate."', '".$noidung."')";
        echo $query;
        $db->exec($query);
    } 
     

    function getCountComment($mahh){
        $db=new connect();
        $select="select count(mabl) from binhluan1 WHERE mahh=$mahh";
        $result=$db->getInstance($select);
        return $result[0];
    }

    function getNoiDungComment($mahh){
        $db = new connect();
        $select= "SELECT a.username, b.noidung, b.ngaybl from khachhang1 a
        INNER join binhluan1  b on a.makh=b.makh WHERE b.mahh=$mahh ";
        $result=$db->getlist($select);
        return $result;
    }

}

?>
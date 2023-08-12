<?php
class  hanghoa{
    function __construct()
    {
    }
    function getListHangHoaAllPage($start,$limit){
        $db = new connect();
        $select = 'select * from hanghoa limit '.$start .','.$limit;
        $results = $db->getlist($select);

        return $results;
    }
    function  getHHnew()
    {
        $db = new connect(); //ket noi database
        $select = "SELECT * FROM hanghoa ORDER BY mahh DESC LIMIT 12"; //lenh truy van
        return $db->getlist($select); //truyen lenh truy van vao database de lay du lieu tra ve
    }
    function  getAll(){
        $db = new connect(); //ket noi database
        $select = "SELECT * FROM hanghoa"; //lenh truy van
        return $db->getlist($select); //truyen lenh truy van vao database de lay du lieu tra ve
    }
    function  getHHsale()
    {
        $db = new connect();
        $select = "SELECT * FROM hanghoa where giamgia>0  LIMIT 3";
        return $db->getlist($select);
    }
    function  getAllsale(){
        $db = new connect();
        $select = "SELECT * FROM hanghoa where giamgia > 0";
        return $db->getlist($select);
    }
    function  gethanghoaID($id){
        $db = new connect();
        $select = "SELECT * FROM hanghoa where mahh=$id";
        return $db->getinstance($select);
    }
    //lay ra mau sac va hinh
    function  getHHnhom($nhom){
        $db = new connect();
        $select = "SELECT hinh FROM hanghoa where nhom =$nhom ";
        return $db->getlist($select);

    }
     function getTimkiemHH($timkiem){
        $db = new connect();
        $select = "SELECT * FROM hanghoa WHERE tenhh LIKE '%$timkiem%' or dongia like  '%$timkiem%' ";
        $result =$db->getlist($select);
        return $result;

     } 

     function getCountHH(){
        $db= new connect ();
        $select= "select count(*) from hanghoa";
        $result =$db->getInstance($select);
        return $result[0];
     }

}
?>
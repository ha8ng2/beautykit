<?php
class hoadon{
function __construct(){}
        function InsertOrder($makh)
        {
            $db = new connect();
            $date = new DateTime("now");
            $datacreate = $date ->format("Y-m-d");
            $query = "INSERT into `hoadon1`(`masohd`, `makh`, `ngaydat`, `tongtien`)values(NULL, $makh, '$datacreate',0)";
            $db->exec($query);
            $int=$db->getInstance("SELECT masohd from hoadon1 order by masohd desc limit 1");
            return $int[0];
        }
        function insetOrderDetail($masohd, $mahh, $soluong, $thanhtien){
            $db = new connect();
            $query="INSERT into `cthoadon1`(`masohd`, `mahh`, `soluong`, `thanhtien`, `tinhtrang`)
             value ('".$masohd."', '".$mahh."', '".$soluong."', '".$thanhtien."','')"   ;
             $db->exec($query);
        }
        function updateOrderTotal($sohd, $tongtien){
            $db= new connect();
            $query="UPDATE hoadon1 set tongtien=$tongtien where masohd=$sohd";
            $db->exec($query);
        }
        function getOrder($sohdid){
            $db = new connect();
            $select ="SELECT b.masohd, a.tenkh, a.diachi, a.sodienthoai, b.ngaydat from khachhang1 a 
            INNER join hoadon1 b on a.makh=b.makh where b.masohd=$sohdid";
        $result=$db->getInstance($select);
        return $result;
        }
        function getOrderDetail($sohdid){
            $db= new connect();
            $select=" SELECT a.tenhh, a.dongia, b.soluongmua, b.thanhtien from hanghoa a
            INNER join cthoadon1 b on a.mahh=b.mahh where masohd=$sohdid";
            $result=$db->getList($select);
            return $result; 
        }
}

?>
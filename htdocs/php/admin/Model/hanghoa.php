<?php
class hanghoa
{
    function __construct()
    {
    }
    //phương thức lấy thông tin của tất cả hàng hóa
    public function getHangHoaAll()
    {
        $db = new connect();
        $select = "select * from hanghoa";
        $result = $db->getList($select);
        return $result;
    }

    //phương thứclấy thông tin của 1 san phẩm
    public function getHangHoaId($id)
    {
        $db = new connect();
        $select = "select * from hanghoa where mahh=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    ///phương thức cập nhập hàng hóa
    function updatesp(
        $id,
        $tenhh,
        $dongia,
        $giamgia,
        $hinh,
        $maloai,
        $dacbiet,
        $soluotxem,
        $ngaylap,
        $mota,
        $soluongton
    ) {
        $db = new connect();
        $query = "UPDATE `hanghoa` SET `tenhh` = '" . $tenhh . "', `dongia` = '" . $dongia . "', 
        `giamgia` = '" . $giamgia . "', `hinh` = '" . $hinh . "', `maloai` = '" . $maloai . "',
         `dacbiet` = b'" . $dacbiet . "', `soluotxem` = '" . $soluotxem . "', `ngaylap` = '" . $ngaylap . "',
          `mota` = '" . $mota . "', `soluongton` = '" . $soluongton ."' WHERE `hanghoa`.`mahh` = " . $id . ";";

        $db->exec($query);
    }
    //phương thức insert
    function insertsp($tenhh, $dongia, $giamgia, $hinh, $maloai, $dacbiet, $soluotxem, $ngaylap,
     $mota, $soluongton)
    {
        $date = new DateTime($ngaylap);
        $ngay = $date->format("Y-m-d");
        $db = new connect();
        $query = "INSERT INTO `hanghoa` (`mahh`, `tenhh`, `dongia`, `giamgia`, `hinh`,
         `Nhom`, `maloai`, `dacbiet`, `soluotxem`, `ngaylap`, `mota`, `soluongton`) 
        VALUES (NULL, '".$tenhh."', '".$dongia."', '".$giamgia."', '".$hinh."', '1', 
        '".$maloai."', 'b".$dacbiet."', '".$soluotxem."', '".$ngaylap."', '".$mota."', '".$soluongton."')";
        $db->exec($query);
    }
    // PHƯƠNG THỨC DELETE
    function deleteHH($id){
        $db = new connect();
        $query="DELETE FROM `hanghoa` WHERE `hanghoa`.`mahh` = $id";
        $db->exec($query);
    }
    //phương thức tất cả hàng hóa bán đc
    function getThongKe_MatHang()
    {
        $db=new connect();

        $select="SELECT a.tenhh, sum(b.soluongmua) as soluong from hanghoa a, 
        cthoadon1 b WHERE a.mahh=b.mahh group by a.tenhh";
        $result = $db->getList($select);
        return $result;
    }

    function getbaocao_Quy()
    {
        $db = new connect();
        $select = "select a.tenhh, sum(b.soluongmua) as soluong
        from hanghoa a,cthoadon1 b, hoadon1 c where a.mahh=b.mahh and c.masohd=b.masohd
        and day(ngaylap) =8 and month(ngaylap) = 8 and year(ngaylap) =2020 group by a.tenhh";
        $result = $db->getList($select);
        return $result;
    }
    function getbaocao_Thang()
    {
        $db = new connect();
        $select = "SELECT a.tenhh, SUM(b.soluongmua) AS soluong FROM hanghoa a, cthoadon1 b, hoadon1 c 
        WHERE a.mahh=b.mahh AND c.masohd=b.masohd AND MONTH(ngaylap) = 8 
        AND YEAR(ngaylap) = 2020 GROUP BY a.tenhh LIMIT 0, 25;";
        $result = $db->getList($select);
        return $result;
    }
    function getbaocao_Nam()
    {
        $db = new connect();
        $select = "select a.tenhh, sum(b.soluongmua) as soluong
        from hanghoa a,cthoadon1 b, hoadon1 c where a.mahh=b.mahh and c.masohd=b.masohd
        and year(ngaylap) =2020 group by a.tenhh";
        $result = $db->getList($select);
        return $result;
    }
    function getBaocao($m, $y)
    {
        $db = new connect();
        $select = "SELECT a.tenhh , SUM(b.soluongmua) as soluong FROM hanghoa a, cthoadon1 b,hoadon1 c WHERE a.mahh=b.mahh AND c.masohd=b.masohd AND month(c.ngaydat)=$m AND year(c.ngaydat) = $y GROUP BY a.tenhh";
        return $db->getlist($select);
    }
}

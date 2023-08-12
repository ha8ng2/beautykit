
<?php
class loaisp
{
    function __construct()
    {
    }
    // phương thức kiểm tra thông tin admin
    function getLoaiSanPham()
    {
        $db = new connect();
        $select = "SELECT * FROM loaisanpham";
        $result = $db->getList($select);
        return $result;
    }
    // phương thức cập nhật loại hoa
    public function updateloai($maloai, $tenloai, $menu)
    {
        $db = new connect();
        $query = "UPDATE loaisanpham SET tenloai = '$tenloai', idmenu = $menu WHERE maloai = $maloai";
        $result = $db->exec($query);
        return $result;
    }
    // lấy loại hoa theo id
    public function getloaiid($maloai)
    {
        $db = new connect();
        $select = "SELECT * FROM loaisanpham WHERE maloai = $maloai";
        $result = $db->getInstance($select);
        return $result;
    }
    //thêm loại hoa 
    public function insertloai($tenloai, $idmenu)
    {
        $db = new connect();
        $select = "INSERT INTO loaisanpham (tenloai, idmenu) VALUES ('$tenloai', $idmenu)";
        $result = $db->exec($select);
        return $result;
    }
    public function deleteLoaiSanPhamById($maloai)
    {
        $db = new connect();
        $query = "DELETE FROM loaisanpham WHERE maloai = $maloai";
        $result = $db->exec($query);
        return $result;
    }
}
?>
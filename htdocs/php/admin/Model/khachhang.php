<?php
    class khachhang{
        
        public function getkhachhang()
        {       
            $db = new connect();
            $select = "SELECT * FROM khachhang1 ";
            $result = $db->getList($select);
            return $result;
        }
        public function updatekhachhang1($tenkh, $diachi,$sodienthoai,$makh)
    {
        $db = new connect();
       
        $query = "UPDATE `khachhang1` SET `tenkh` = '$tenkh',  `diachi` = '$diachi', `sodienthoai` = '$sodienthoai' WHERE `khachhang1`.`makh` = $makh";
        $result = $db->exec($query);
        return $result;
    }
    public function getkhachhang1id($makh)
    {
        $db = new connect();
        $select = "SELECT * FROM khachhang1 WHERE makh = $makh";
        $result = $db->getInstance($select);
        return $result;
    }
    
    public function deletekhachhang1($makh)
    {
        $db = new connect();
        $query = "DELETE FROM khachhang1 WHERE makh = '$makh'";
        $result = $db->exec($query);
        return $result;
    }
   
   }?>
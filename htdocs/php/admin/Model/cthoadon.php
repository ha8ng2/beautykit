<?php
    class cthoadon{
        public function getcthoadon()
        {       
            $db = new connect();
            $select = "SELECT * FROM cthoadon1 ";
            $result = $db->getList($select);
            return $result;
        }
        public function updatecthoadon1($masohd,$mahh,$soluongmua,$thanhtien)
    {
        $db = new connect();
        $query = "UPDATE `cthoadon1` SET `soluongmua` = '$soluongmua', `thanhtien` = '$thanhtien' WHERE `cthoadon1`.`masohd` = $masohd AND `cthoadon1`.`mahh` = $mahh";
        $result = $db->exec($query);
        return $result;
    }
    public function getcthoadon1id($masohd)
    {
        $db = new connect();
        $select = "SELECT * FROM cthoadon1 WHERE masohd = $masohd";
        $result = $db->getInstance($select);
        return $result;
    }
    public function insertcthoadon1($mahh,$soluongmua,$thanhtien)
    {
        $db = new connect();
        $select = "INSERT INTO `cthoadon1`( mahh, soluongmua, thanhtien) VALUES ('$mahh','$soluongmua','$thanhtien')";
        $result = $db->exec($select);
        return $result;
    }
    public function deletecthoadon1($masohd)
    {
        $db = new connect();
        $query = "DELETE FROM cthoadon1 WHERE masohd = $masohd";
        $result = $db->exec($query);
        return $result;
    }
   
   }?>
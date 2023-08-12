<?php
    class hoadon{
        public function gethoadon()
        {       
            $db = new connect();
            $select = "SELECT * FROM hoadon1 ";
            $result = $db->getList($select);
            return $result;
        }
        public function getcthoadon()
        {       
            $db = new connect();
            $select = "SELECT * FROM cthoadon1 ";
            $result = $db->getList($select);
            return $result;
        }

        public function updatehoadon1($tongtien, $masohd, $makh,$ngaydat)
    {
        $db = new connect();
        $query = "UPDATE `hoadon1` SET `makh` = '$makh', `ngaydat` = '$ngaydat', `tongtien` = '$tongtien' WHERE `hoadon1`.`masohd` = $masohd";
        $result = $db->exec($query);
        return $result;
    }
    public function gethoadon1id($masohd)
    {
        $db = new connect();
        $select = "SELECT * FROM hoadon1 WHERE masohd = $masohd";
        $result = $db->getInstance($select);
        return $result;
    }
    public function inserthoadon1( $makh,$ngaydat,$tongtien)
    {
        $db = new connect();


        $select = "INSERT INTO `hoadon1` ( makh, ngaydat, tongtien) VALUES ( $makh,$ngaydat,$tongtien)";
        $result = $db->exec($select);
        return $result;
    }
    public function deletehoadon1($masohd)
    {
        $db = new connect();
        $query = "DELETE FROM hoadon1 WHERE masohd = $masohd";
        $result = $db->exec($query);
        return $result;
    }
   
   }?>

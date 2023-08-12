<?php
    class dangnhap{
        function __construct(){}
        // phương thức kiểm tra thông tin admin
        function getAdmin($user,$pass)
        {
            $db=new connect();
            $select="select * from admin where user='$user' and pass='$pass'";
            $result=$db->getInstance($select);
            return $result;
        }
        //update mật khẩu cho tài khoản admin
        function updatepass($user,$newpass)
        {
            $db=new connect();
            $query="UPDATE admin SET pass = $newpass WHERE user='$user'";
            $db->exec($query);
        }
    }
?>
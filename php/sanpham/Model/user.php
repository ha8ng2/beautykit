<?php

class user
{
    public function __construct()
    {
    }

     function addUser($ten, $user, $crypt, $mail, $diachi, $sodt)
    {
        $db = new connect();
        $query = "INSERT INTO khachhang1 VALUES (null,'$ten','$user','$crypt' ,'$mail','$diachi','$sodt' ,default)";
        echo $query;
        $db->exec($query);
    }

    function find($user)
    {
        $db = new connect();
        $query = "SELECT * FROM khachhang1 WHERE username like '$user'";
        echo $query;
        return $db->getinstance($query);
    }

    function loginuser($username, $pass)
    {
        $db = new connect();
        $select = "SELECT * FROM khachhang1 WHERE username = '$username' and matkhau = '$pass' ";
        echo $select;
        $result = $db->getlist($select);
        $set = $result->fetch();
        return $set;
    }
    function getEmail($email){
        $db = new connect();
        $select= "select * from khachhang1 where email='$email'";
        $result = $db->getInstance($select);
        return $result;    
    }

    function updateEmail($emailold, $codenew){
        $db =new connect();
        $query="update khachhang1 set matkhau1='$codenew' where 'email=$emailold' ";
        $db->exec($query);
    }
}

<?php
$act = 'dangnhap';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangnhap':
        include "View/dangnhap.php";
        break;
    case  'login_action':
        if (isset($_POST['txtusername']) && isset($_POST['txtpassword'])) {
            $user = $_POST['txtusername'];
            $head = 'SC113#';
            $foot = 'AC3';
            $pass = md5($head . $_POST['txtpassword'] . $foot);
            //controller yeu cau model kiem tra
            $us = new user();
            $kq = $us->loginuser($user, $pass); //$kq = ['tenkh','pass','...']
            if ($kq != false) {

                //dua thong tin len session nham muc dich xac nhan thao tac cua user tai cac page khac nhau
                $_SESSION['makh'] = $kq['makh'];
                $_SESSION['ten'] = $kq['tenkh'];
                $_SESSION['user'] = $kq['username'];
                echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=home"/>';
            } else {
                echo "<script>alert ('đăng nhập thất bại!!!')</script>";
                include "View/dangky.php";

            }

        }
        break;
    case 'logout':
        if (isset($_SESSION['makh'])) {
            unset($_SESSION['makh']);
            unset($_SESSION['ten']);
            unset($_SESSION['user']);
            unset($_SESSION['cart']);
            include "View/home.php";

        }
        break;

}

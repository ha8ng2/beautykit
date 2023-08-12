<?php
$act = 'dangky';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case  'dangky':
        include 'View/dangky.php';
        break;
    case  'dk_action':
        if (isset($_POST['txttenkh'])) {
            $ten = $_POST['txttenkh'];
            $diachi = $_POST['txtdiachi'];
            $sodt = $_POST['txtsodt'];
            $user = $_POST['txtusername'];
            $mail = $_POST['txtemail'];
            $pass = $_POST['txtpass'];

            //ma hoá string
            $head = 'SC113#';
            $foot = 'AC3';
            $crypt = md5($head . $pass . $foot);
            $ur = new user();
            $find = $ur->find($user);
//            echo var_dump($find);
            if ($find != false) {
                echo "<script>alert ('user đã tồn tại !!!')</script>";
                include "View/dangky.php";

            } else {
                $check = $ur->addUser($ten, $user, $crypt, $mail, $diachi, $sodt);
                if ($check != 'false') {
                    $makh = $ur->find($user);
                    echo $makh;
                    $_SESSION['makh'] = $makh; //admin
                    echo "<script>alert ('đăng nhập thành công!!!')</script>";
                    include "View/home.php";
                } else {
                    echo "<script>alert ('đăng nhập thất bại!!!')</script>";
                    include "View/dangky.php";

                }
            }

        }
//        include 'View/dangky.php';
        break;
}

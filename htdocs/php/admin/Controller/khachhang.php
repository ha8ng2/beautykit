<?php

$act = "khachhang";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'khachhang':
        include "./View/khachhang.php";
        break;
    case 'add':
        include "./View/addkhachhang.php";
        break;
    
    case 'update':
        include "./View/addkhachhang.php";
        break;
    case 'update_action':
        if (isset($_POST['submit'])) {
            $tenkh = $_POST['tenkh'];
            
            $diachi = $_POST['diachi'];
            $sodienthoai = $_POST['sodienthoai'];
            $makh = $_POST['makh'];
            $kh = new khachhang();
            $result = $kh->updatekhachhang1($tenkh, $diachi,$sodienthoai,$makh);
            if ($result != false) {
                echo '<script> alert("Sửa  thành công");</script>';
                include "./View/khachhang.php";
            } else {
                echo '<script> alert("Không sửa được");</script>';
                include "./View/khachhang.php";
            }
        }
        break;
    case 'delete':
        if(isset($_GET['id'])){
            $makh = $_GET['id'];
            $kh = new khachhang();
            $result = $kh->deletekhachhang1(($makh));
            if($result != false){
                echo '<script> alert("xóa thành công");</script>';
                include "./View/khachhang.php";
            }
        }
     break;
}

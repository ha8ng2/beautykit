<?php

$act = "cthoadon";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'cthoadon':
        include "./View/cthoadon.php";
        break;
    case 'add':
        include "./View/addcthoadon.php";
        break;
    case 'add_action':
        if (isset($_POST['submit'])) {
            $masohd=$_POST['$masohd'];  
            $mahh = $_POST['mahh'];
            $soluongmua = $_POST['soluongmua'];
            $thanhtien = $_POST['thanhtien'];
            $cthd = new cthoadon();
            $result = $cthd->insertcthoadon1($masohd,$mahh,$soluongmua,$thanhtien);
            if ($result != false) {
                echo '<script> alert("thêm thành công");</script>';
                include "./View/cthoadon.php";
            } else {
                echo '<script> alert("thêm thất bại");</script>';
                include "./View/cthoadon.php";
            }
        }
    case 'update':
        include "./View/addcthoadon.php";
        break;
    case 'update_action':
        if (isset($_POST['submit'])) {
            $masohd = $_POST['masohd'];
            $mahh = $_POST['mahh'];
            $soluongmua = $_POST['soluongmua'];
            $thanhtien = $_POST['thanhtien'];
            $cthd = new cthoadon();
            $result = $cthd->updatecthoadon1($masohd,$mahh,$soluongmua,$thanhtien);
            if ($result != false) {
                echo '<script> alert("sửa  thành công");</script>';
                include "./View/cthoadon.php";
            } else {
                echo '<script> alert("không sửa được");</script>';
                include "./View/cthoadon.php";
            }
        }
        break;
    case 'delete':
        if(isset($_GET['id'])){
            $masohd = $_GET['id'];
            $cthd = new cthoadon();
            $result = $cthd->deletecthoadon1(($masohd));
            if($result != false){
                echo '<script> alert("xóa thành công");</script>';
                include "./View/cthoadon.php";
            }
        }
        break;
}

<?php
    $act = 'hoadon';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch ($act) {
        case 'hoadon':
            include "./View/hoadon.php";
            break;
        case 'cthoadon':
            include "./View/cthoadon.php";
            break;
            case 'add_action':
                if (isset($_POST['submit'])) {
                    $makh = $_POST['makh'];
                    $ngaydat = $_POST['ngaydat'];
                    $tongtien = $_POST['tongtien'];
                    $hd = new hoadon();
                    $result = $hd->inserthoadon1($makh, $ngaydat,$tongtien);
                    if ($result != false) {
                        echo '<script> alert("thêm thành công");</script>';
                        include "./View/hoadon.php";
                    } else {
                        echo '<script> alert("thêm thất bại");</script>';
                        include "./View/hoadon.php";
                    }
                }
            case 'update':
                include "./View/addhoadon.php";
                break;
            case 'update_action':
                if (isset($_POST['submit'])) {
                    $masohd = $_POST['masohd'];
                    $makh = $_POST['makh'];
                    $ngaydat = $_POST['ngaydat'];
                    $tongtien = $_POST['tongtien'];
                    $hd = new hoadon();
                    $result = $hd->updatehoadon1($tongtien, $masohd, $makh,$ngaydat);
                    if ($result != false) {
                        echo '<script> alert("sửa  thành công");</script>';
                        include "./View/hoadon.php";
                    } else {
                        echo '<script> alert("Không sửa được");</script>';
                        include "./View/hoadon.php";
                    }
                }
                break;
            case 'delete':
                if(isset($_GET['id'])){
                    $masohd = $_GET['id'];
                    $hd = new hoadon();
                    $result = $hd->deletehoadon1(($masohd));
                    if($result != false){
                        echo '<script> alert("xóa thành công");</script>';
                        include "./View/hoadon.php";
                    }
                }
                break;
    }
?>
<?php

$act = "loaisanpham";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'loaisanpham':
        include "./View/editloaisanpham.php";
        break;
    case 'add':
        include "./View/addloaisanpham.php";
        break;
    case 'add_action':
        if (isset($_POST['submit'])) {
            $tenloai = $_POST['tenloai'];
            $menu = $_POST['menu'];
            $lsp = new loaisanpham();
            $result = $lsp->insertloai($tenloai, $menu);
            if ($result != false) {
                echo '<script> alert("Thêm loại hàng thành công");</script>';
                include "./View/editloaisanpham.php";
            } else {
                echo '<script> alert("Thêm loại hàng thất bại");</script>';
                include "./View/editloaisanpham.php";
            }
        }
    case 'update':
        include "./View/addloaisanpham.php";
        break;
    case 'update_action':
        if (isset($_POST['submit'])) {
            $maloai = $_POST['maloai'];
            $tenloai = $_POST['tenloai'];
            $menu = $_POST['menu'];
            $lsp = new loaisanpham();
            $result = $lsp->updateloai($maloai, $tenloai, $menu);
            if ($result != false) {
                echo '<script> alert("Sửa loại hàng thành công");</script>';
                include "./View/editloaisanpham.php";
            } else {
                echo '<script> alert("Không sửa được loại hàng");</script>';
                include "./View/editloaisanpham.php";
            }
        }
        break;
        case 'delete':
            if(isset($_GET['id'])){
                $maloai = $_GET['id'];
                $lsp = new loaisanpham();
                $result = $lsp->deleteLoaiSanPhamById(($maloai));
                if($result != false){
                    echo '<script> alert("Xóa thành công");</script>';
                    include "./View/editloaisanpham.php";
                }
            }
            break;
}
?>
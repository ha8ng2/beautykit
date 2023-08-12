<?php
$act = 'sanpham';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case ('sanpham'):
        include 'View/sanpham.php';
        break;
    case ('khuyenmai'):
        include  'View/khuyenmai.php';
        break;
    case ('detail'):
        include  'View/sanphamchitiet.php';
        break;
    case ('timkiem'):
        
        include 'View/sanpham.php';
        break;

    case ('comment'):
        if (isset($_GET['id'])) {
            $mahh = $_GET['id'];
            $makh = $_SESSION['makh'];
            $noidung = $_POST['comment'];

            $bl= new binhluan();
            $bl->insertcomment($mahh, $makh, $noidung);
            {

            }
            include "./View/sanphamchitiet.php";
            break;
        }
}

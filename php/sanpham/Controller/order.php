<?php
if (isset($_SESSION['makh'])) {
    $hd = new hoadon();
    $sohd = $hd->InsertOrder($_SESSION['makh']);
    $_SESSION['masohd']=$sohd;

    $tongtien = 0;
     if($_SESSION['cart']){
    foreach($_SESSION['cart'] as $key->$item){
      $hd->insetOrderDetail
      ($sohd,
       $item['mahh'],
      $item['soluong'], 
      $item['total'],
    $tongtien += $item['total']
      );
    }
  }
    $hd->updateOrderTotal($sohd,$tongtien);
    include "./View/hoadon.php";
  }
else{
    echo '<script> alert ("Bạn chưa đăng nhập!!"); </script>';
    include "./View/dangnhap.php";
}


?>

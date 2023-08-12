<?php
//kiểm tra giỏ hàng , nếu chưa có phải tạo giỏ hàng
$act = 'giohang';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'giohang':
        {
            if (empty($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }

            if (isset($_POST['mahh'])) {
                $mahh = $_POST['mahh'];
                $sl = $_POST['soluong'];
                //đưa thông tin vào giỏ hàng
                $giohang = new giohang();
                $giohang->add_item($mahh, $sl);

            }
            if (isset($_GET['mahh'])) {
                $mahh = $_GET['mahh'];
                $sl = $_GET['soluong'];
                //đưa thông tin vào giỏ hàng
                $giohang = new giohang();
                $giohang->add_item($mahh, $sl);

            }

            include 'View/cart.php';
        }
        break;
    case 'del':
        {
            $giohang = new giohang();
            $giohang->delete_item($_GET['id']);
            include 'View/cart.php';

        }
        break;
    case  'update':
        {
            if (isset($_POST['newqty'])) {
                $new_list = $_POST['newqty'];// $new_list=[0=>3,1=>4]
                //so luong trong gio hang khac sl trong newlist thi update
                foreach ($new_list as $i => $v) {
                    if ($_SESSION['cart'][$i]['soluong'] != $v) {
                        //viet model xu li
                        $gh = new giohang();
                        $gh->update_item($i, $v);
                    }

                }

            }
            include 'View/cart.php';
        }
        break;


}


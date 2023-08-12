<?php
$act = "dangnhap";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangnhap':
        include "./View/dangnhap.php";
        break;

    case 'dangnhap_action':
        # nhận về user và pass, khi mà đăng nhập thành công
        // lưu vào $_SESSION['admin']
        if (isset($_POST['txtusername']) && isset($_POST['txtpassword'])) {
            $user = $_POST['txtusername']; //admin
            $pass = $_POST['txtpassword']; //123456
            // lấy thông tin người dùng nhập vào kiểm tra có tồn tại trong database
            $dn = new dangnhap();
            $check = $dn->getAdmin($user, $pass);
            if ($check != false) {
                $_SESSION['admin'] = $check[0]; //admin
                echo '<script> alert("Đăng nhập thành công");</script>';
                // nếu đăng nhập thành công thì hiển thị trang hàng hóa
                echo '<meta http-equiv=refresh content="0;url=http://localhost/php/admin/index.php?action=hanghoa"/>';
            } else {
                echo '<script> alert("Đăng nhập không thành công");</script>';
                include "./View/dangnhap.php";
            }
        }
        break;
        case "change_password":
            include "./View/changepass.php";
            break;
        case "change_password_action":
            if(isset($_POST['login'])){
                $user = $_POST['txtusername'];
                $pass = $_POST['txtpassword'];
                $newpass = $_POST['txtnewpassword'];
    
                //kiễm tra tài khoản có tồn tại
                $dn = new dangnhap();
                $result = $dn->getAdmin($user, $pass);
                if($result != false){
                    $dn->updatepass($user, $newpass);
                    unset($_SESSION['admin']);
                    echo '<script> alert("Thay đổi password thành công");</script>';
                    include "./View/dangnhap.php";
                }else{
                    echo '<script> alert("Tài khoản không tồn tại");</script>';
                    include "./View/changepass.php";
                }
            }
            break;    
}
?>

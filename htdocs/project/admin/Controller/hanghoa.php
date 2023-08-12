

<?php

$act = "hanghoa";
if (isset($_GET['act'])) 
{
    $act = $_GET['act'];
}
switch ($act) {

    case "hanghoa":
        include "./View/hanghoa.php";
        break;

    case "edit":
        include "./View/edithanghoa.php";
        break;

    case "themsp":
        include "./View/edithanghoa.php";
        break;

    case "edit_action":
        if (isset($_GET['id'])) {
            $mahh = $_GET['id'];
            $tenhh = $_POST['tenhh'];
            $dongia = $_POST['dongia'];
            $giamgia = $_POST['giamgia'];
            $hinh = $_FILES['image']['name'];
            $maloai = $_POST['maloai'];
            $dacbiet = $_POST['dacbiet'];
            $soluotxem = $_POST['slx'];
            $ngaylap = $_POST['ngaylap'];
            $mota = $_POST['mota'];
            $soluongton = $_POST['slt'];
            $hh = new hanghoa();
            $hh->updatesp(
                $mahh,
                $tenhh,
                $dongia,
                $giamgia,
                $hinh,
                $maloai,
                $dacbiet,
                $soluotxem,
                $ngaylap,
                $mota,
                $soluongton,
                
            );
            if (isset($hh)) 
            {
                uploadImage();
                echo '<script> alert ("Cập nhập thành công");</script>';
                include "./View/hanghoa.php";
            }
            else
            {
                echo '<script> alert ("Cập nhập ko thành công");</script>';
                include "./View/edithanghoa.php";
            }
        }
        break;
        case "themsp_action":
            $mahh = $_POST['mahh'];
            $tenhh = $_POST['tenhh'];
            $dongia = $_POST['dongia'];
            $giamgia = $_POST['giamgia'];
            $hinh = $_FILES['image']['name'];
            $maloai = $_POST['maloai'];
            $dacbiet = $_POST['dacbiet'];
            $soluotxem = $_POST['slx'];
            $ngaylap = $_POST['ngaylap'];
            $mota = $_POST['mota'];
            $soluongton = $_POST['slt'];
           
            $hh=new hanghoa();
            $hh->insertsp($tenhh, $dongia, $giamgia, $hinh, $maloai, $dacbiet, $soluotxem, $ngaylap, $mota, $soluongton);
            if(isset($hh))
            {
                uploadImage();
                echo '<script> alert ("Cập nhập thành công");</script>';
                include "./View/hanghoa.php";
            }
            else
            {
                echo '<script> alert ("Cập nhập ko thành công");</script>';
                include "./View/edithanghoa.php";
            }
            break;
            case 'delete':
                if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    //thực hiện xóa
                    $hh=new hanghoa();
                    $hh->deleteHH($id);
                    if(isset($hh))
                    {
                        echo '<script> alert ("Xóa thành công");</script>';
                         include "./View/hanghoa.php";
                    }
                }
                break;
}

<?php
$act ="loai";
if (isset($_GET['act']))
{
    $act=$_GET['act'];
}
switch ($act) {
    case 'loai':
        include "./View/addloaisanpham.php";
        break;
    
   case'loai_action';
        if(isset($_POST['submit_file']))
        {
            // b1 lấy file về
            $file=$_FILES['file']['tmp_name'];
            // xóa mhuwngx kí tự đặt biệt
            file_put_contents($file,str_replace("\xEF\xBB\xBF","",file_get_contents($file)));
            // b2 mở file ra
            $file_open=fopen($file,"r");
            // b3 đọc nội dung của file
            while(($csv=fgetcsv($file_open,1000,","))!==false)
            {
                $db=new connect();
                $maloai=$csv[0];//null
                $tenloai=$csv[1];
                $idmemu=$csv[2];
                $query= "INSERT INTO `loaisanpham` (`maloai`, `tenloai`, `idmenu`) VALUES (NULL, '".$tenloai."', '".$idmemu."')";
                $db->exec($query);
            }
            echo '<script> alert ("Import thành công")</script>';
        }
        include "./View/addloaisanpham.php";
        break;
}
?>
<?php
function uploadImage()
{
    //tạo đường dẫn để lấy hình
    $target_dir="Content/images/";
    //b1 cần lấy tên hình về để vào đường dẫn

    $target_file=$target_dir.basename($_FILES['image']['name']);
    //b2 lấy phần mở rộng ra kiểm tra có hình hay không
    $imageFileTypes=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    //B3 KIỂM TRA THỰC SỰ HÌNH CÓ UP LÊN SERVER
    $uploadhinh=1;
    if(isset($_POST['submit']))
    {
        $check=getimagesize($_FILES['image']['tmp_name']);
        if($check!==false)
        {
            $uploadhinh=1;
        }
        else
        {
            $uploadhinh=2;
            echo '<script>alert("Hình ko tồn tại");</script>';
        }
    }
    //kiểm tra hình tồn tại htrong thư mục chưua
    if(file_exists($target_file))
    {
        $uploadhinh=0;
        echo '<script>alert("Hình đã tồn tại");</script>';

    }
    //liểm tra hình không vượt quá 5000
    if($_FILES['image']['size']>500000)
    {
        $uploadhinh=0;
        echo '<script>alert("Hình vượt quá dung lượng");</script>';
    }
    //kiểm tra có phải hình hay không
    if($imageFileTypes != 'jpg' && $imageFileTypes !='png' 
    && $imageFileTypes !='jpeg' && $imageFileTypes !='gif')
    {
        $uploadhinh=0;
        echo '<script>alert("Không phải là file hình");</script>';
    }
    //tiens hành đưa về thư mục hình
    if($uploadhinh==1)
    {
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file))
        {
        
            echo '<script>alert("Upload thành công");</script>';
        }
        else
        {
            echo '<script>alert("Upload không thành công");</script>';
        }
    }
}
?>
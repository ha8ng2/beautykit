<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{color:#FF0000;}
    </style>
</head>
<body>
<?php
  //$_SERVER["PHP_SEFT"]: trả về tên file của hiện tại
  // $_SERVER["PHP_SEFT"] sẽ gửi dữ liệu form đến chính nó thay vì nhảy qua trang khác
  // htmlspecialchar()? chuyern các ký tự đặc biệt htafnh các thực thể HTML, nó sẽ thay
  // thế các ký tự HTML như <and> &lt &gt;
//   khai báo biến 
$name=$email=$code=$phone=$pass=$gender="";
$nameErr=$emailErr=$codeErr=$phoneErr=$passErr=$genderErr="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   
    
}
// hàm kiểm tra loại bỏ các khoange trắng \, tránh hay đổi dữ liệu

?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
<p>PHP FORM</p>
<!-- MSS00001 -->
    Code ID:
    <input type="text" name="code" id="" value="<?php if(isset($code)) echo $code?>">
    <span class="error">*<?php ?></span><br><br>
    Name:
    <input type="text" name="name" id="" value="<?php if(isset($name)) echo $name?>">
    <span class="error">*<?php ?></span><br><br>
    Email:
    <input type="text" name="email" id="" value="<?php if(isset($email)) echo $email?>">
    <span class="error">*<?php ?></span><br><br>
    Phone:
    <input type="text" name="phone" id="" value="<?php if(isset($phone)) echo $phone?>">
    <span class="error">*<?php ?></span><br><br>
    <!-- ký tự đầu là in hoa chuỗi là số, ký tự đặt biệt độ dài tối thiểu là 6 ký thự -->
    Pass:
    <input type="password" name="pass" id=""value="<?php if(isset($pass)) echo $pass?>">
    <span class="error">*<?php ?></span><br><br>
    Comment:
    <textarea name="comment" id="" cols="30" rows="10"></textarea><br><br>
    Gender:
    <input type="radio" name="gender" id="" <?php ?> value="female">Female
    <input type="radio" name="gender" id="" <?php ?> value="male">Male
    <input type="radio" name="gender" id="" <?php ?>value="other">Other
    <span class="error">*<?php ?></span><br><br>
    <!-- submit -->
    <input type="submit" value="Submit">
</form>
<!-- hiển thị thông tin khi nhập đúng -->
<?php
echo "Thông tin nhập đúng";
echo "<br>";
echo $code;
echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $pass;
echo "<br>";
echo $gender;
?>

</body>
</html>
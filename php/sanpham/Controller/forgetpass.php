<?php
$act = 'forgetpass';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'forgetpass':
        include "./View/forgetpassword.php";
        break;
    case 'forget_action':
        if (isset($_POST['submit_email'])) {
            $email = $_POST['email'];
            $_SESSION['email'] = array();
            $usr = new user();
            $checkemail = $usr->getEmail($email);
            if ($checkemail != false) {
                $code = random_int(1000, 10000);
                $item = array(
                    'code' => $code,
                    'email' => $email,
                );
                $_SESSION['email'][]=$item;
                $mail = new PHPMailer;
                $mail->IsSMTP();                                //Sets Mailer to send message using SMTP
                $mail->Host = 'smtp.gmail.com';        //Sets the SMTP hosts of your Email hosting, this for Godaddy
                $mail->Port = 587;                                //Sets the default SMTP server port
                $mail->SMTPAuth = true;                            //Sets SMTP authentication. Utilizes the Username and Password variables
                $mail->Username = 'phplytest20@gmail.com';                    //Sets SMTP username
                $mail->Password = 'xdryghruuiucmavr'; //Phplytest20@php					//Sets SMTP password
                $mail->SMTPSecure = 'tls';                            //Sets connection prefix. Options are "", "ssl" or "tls"
                $mail->From = 'phplytest20@gmail.com';                    //Sets the From email address for the message
                $mail->FromName = 'Ly';                //Sets the From name of the message
                $mail->AddAddress($email, 'Reset password');        //Adds a "To" address
                //$mail->AddCC($_POST["email"], $_POST["name"]);	//Adds a "Cc" address
                $mail->WordWrap = 50;                            //Sets word wrapping on the body of the message to a given number of characters
                $mail->IsHTML(true);                            //Sets message type to HTML				
                $mail->Subject = 'Forget password';                //Sets the Subject of the message
                $mail->Body = ' Nhap ma code'.$code;                //An HTML or plain text message body
                if ($mail->Send())                                //Send an Email. Return true on success or false on error
                {
                   echo '<script> alert ("Gui mail thanh cong")</script>';
                } else {
                    echo '<script> alert ("Loi mail")</script>';
                }
            } else {
                echo '<script> alert ("Email khong ton tai"); </script>';
                include "./View/forgetpassword.php";
            }
        }
        case 'resetpw':
            if(isset($_POST['submit_password'])){
                $codenew=$_POST['password'];
                foreach($_SESSION['email']as $key->item){
                    if ($item['code']==$codeold){

                        $codenew=md5($codeold);
                        $emailold= $item['email'];
                        $usr= new user();
                        $usr->updateEmail($emailold, $codenew);
                    }
                    else{
                        echo '<script> alert("Ma code khong dung);"</script>';
                    }
                }
            }
            include "./View/dangnhap.php";
            break;
}
?>
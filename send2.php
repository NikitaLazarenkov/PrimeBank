<?php
// Файлы phpmailer
require 'class.phpmailer.php';
require 'class.smtp.php';

$phone = $_POST['phone'];
$email = $_POST['email'];
$company = $_POST['company-name'];
$inn = $_POST['company-inn'];
$soglasen = $_POST['soglasen'];
$gsumm = $_POST['garant-summ'];
$gsrok = $_POST['garant-srok'];
$option = $_POST['option'];

// Настройки
$mail = new PHPMailer;

$mail->isSMTP(); 
$mail->Host = 'smtp.server';  // SMTP сервер вашей почты
$mail->SMTPAuth = true;                      
$mail->Username = 'login'; // Ваш логин от почты
$mail->Password = 'pass'; // Ваш пароль от почты
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465; // от SMTP настроек почты
$mail->setFrom('mail@mail.ru'); // Ваш Email
$mail->addAddress('mail@mail.ru'); // Email получателя (Ваш Email)

// Прикрепление файлов
    for ($ct = 0; $ct < count($_FILES['ustav-docs1']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['ustav-docs1']['name'][$ct]));
        $filename = $_FILES['ustav-docs1']['name'][$ct];
        if (move_uploaded_file($_FILES['ustav-docs1']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    for ($ct = 0; $ct < count($_FILES['ustav-docs2']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['ustav-docs2']['name'][$ct]));
        $filename = $_FILES['ustav-docs2']['name'][$ct];
        if (move_uploaded_file($_FILES['ustav-docs2']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    for ($ct = 0; $ct < count($_FILES['ustav-docs3']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['ustav-docs3']['name'][$ct]));
        $filename = $_FILES['ustav-docs3']['name'][$ct];
        if (move_uploaded_file($_FILES['ustav-docs3']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    for ($ct = 0; $ct < count($_FILES['ustav-docs4']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['ustav-docs4']['name'][$ct]));
        $filename = $_FILES['ustav-docs4']['name'][$ct];
        if (move_uploaded_file($_FILES['ustav-docs4']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    for ($ct = 0; $ct < count($_FILES['ustav-docs5']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['ustav-docs5']['name'][$ct]));
        $filename = $_FILES['ustav-docs5']['name'][$ct];
        if (move_uploaded_file($_FILES['ustav-docs5']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    
    for ($ct = 0; $ct < count($_FILES['nalog-docs1']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['nalog-docs1']['name'][$ct]));
        $filename = $_FILES['nalog-docs1']['name'][$ct];
        if (move_uploaded_file($_FILES['nalog-docs1']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    for ($ct = 0; $ct < count($_FILES['nalog-docs2']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['nalog-docs2']['name'][$ct]));
        $filename = $_FILES['nalog-docs2']['name'][$ct];
        if (move_uploaded_file($_FILES['nalog-docs2']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    for ($ct = 0; $ct < count($_FILES['nalog-docs3']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['nalog-docs3']['name'][$ct]));
        $filename = $_FILES['nalog-docs3']['name'][$ct];
        if (move_uploaded_file($_FILES['nalog-docs3']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    for ($ct = 0; $ct < count($_FILES['nalog-docs4']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['nalog-docs4']['name'][$ct]));
        $filename = $_FILES['nalog-docs4']['name'][$ct];
        if (move_uploaded_file($_FILES['nalog-docs4']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    for ($ct = 0; $ct < count($_FILES['nalog-docs5']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['nalog-docs5']['name'][$ct]));
        $filename = $_FILES['nalog-docs5']['name'][$ct];
        if (move_uploaded_file($_FILES['nalog-docs5']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    
    for ($ct = 0; $ct < count($_FILES['buh-docs1']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['buh-docs1']['name'][$ct]));
        $filename = $_FILES['buh-docs1']['name'][$ct];
        if (move_uploaded_file($_FILES['buh-docs1']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    for ($ct = 0; $ct < count($_FILES['buh-docs2']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['buh-docs2']['name'][$ct]));
        $filename = $_FILES['buh-docs2']['name'][$ct];
        if (move_uploaded_file($_FILES['buh-docs2']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    for ($ct = 0; $ct < count($_FILES['buh-docs3']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['buh-docs3']['name'][$ct]));
        $filename = $_FILES['buh-docs3']['name'][$ct];
        if (move_uploaded_file($_FILES['buh-docs3']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    for ($ct = 0; $ct < count($_FILES['buh-docs4']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['buh-docs4']['name'][$ct]));
        $filename = $_FILES['buh-docs4']['name'][$ct];
        if (move_uploaded_file($_FILES['buh-docs4']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    for ($ct = 0; $ct < count($_FILES['buh-docs5']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['buh-docs5']['name'][$ct]));
        $filename = $_FILES['buh-docs5']['name'][$ct];
        if (move_uploaded_file($_FILES['buh-docs5']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    
    for ($ct = 0; $ct < count($_FILES['garant-docs1']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['garant-docs1']['name'][$ct]));
        $filename = $_FILES['garant-docs1']['name'][$ct];
        if (move_uploaded_file($_FILES['garant-docs1']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    for ($ct = 0; $ct < count($_FILES['garant-docs2']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['garant-docs2']['name'][$ct]));
        $filename = $_FILES['garant-docs2']['name'][$ct];
        if (move_uploaded_file($_FILES['garant-docs2']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    for ($ct = 0; $ct < count($_FILES['garant-docs3']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['garant-docs3']['name'][$ct]));
        $filename = $_FILES['garant-docs3']['name'][$ct];
        if (move_uploaded_file($_FILES['garant-docs3']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    for ($ct = 0; $ct < count($_FILES['garant-docs4']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['garant-docs4']['name'][$ct]));
        $filename = $_FILES['garant-docs4']['name'][$ct];
        if (move_uploaded_file($_FILES['garant-docs4']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    for ($ct = 0; $ct < count($_FILES['garant-docs5']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['garant-docs5']['name'][$ct]));
        $filename = $_FILES['garant-docs5']['name'][$ct];
        if (move_uploaded_file($_FILES['garant-docs5']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
                                 
// Письмо
$mail->isHTML(true); 
$mail->Subject = "Zayavka from PrimeBankAliance"; // Заголовок письма
$mail->Body    = "
Ваш телефон - $phone <br>
Ваш email - $email <br>
Название компании - $company <br>
ИНН компании - $inn <br>
Согласие - $soglasen <br>
Сумма гарантии - $gsumm <br>
Срок гарантии - $gsrok <br>
Тип гарантии - $option
"; // Текст письма

// Результат
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'ok';
}
?>
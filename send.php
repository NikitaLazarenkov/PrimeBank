<?php
// Файлы phpmailer
require 'class.phpmailer.php';
require 'class.smtp.php';

$budjet = $_POST['budjet'];
$size = $_POST['size'];
$small_proj = $_POST['small_proj'];
$mid_proj = $_POST['mid_proj'];
$large_proj = $_POST['large_proj'];
$lazer = $_POST['lazer'];
$wuxga = $_POST['wuxga'];
$istochnik = $_POST['istochnik'];
$commut = $_POST['commut'];
$krep = $_POST['krep'];
$works = $_POST['works'];
$email = $_POST['email'];




// Настройки
$mail = new PHPMailer;

$mail->isSMTP(); 
$mail->Host = 'smtp.inbox.ru';  		// SMTP сервер вашей почты
$mail->SMTPAuth = true;                      
$mail->Username = 'nik_87'; 			// Ваш логин от почты
$mail->Password = 'mail2403LNik'; 		// Ваш пароль от почты
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465; 						// от SMTP настроек почты
$mail->setFrom('nik_87@inbox.ru'); 		// Ваш Email
$mail->addAddress('nik_87@inbox.ru'); 	// Email получателя (Ваш Email)
$mail->addAddress($email); 				// Email получателя
                                 
// Письмо
$mail->isHTML(true); 
$mail->Subject = "AVPlus - отправка формы"; // Заголовок письма
$mail->Body    = "
Бюджет (1-Дешево, 2-Средний, 3-Премиум) - $budjet<br>
Размер витрины - $size<br>
Тип проектора для маленькой витрины - $small_proj<br>
Тип проектора для Средней витрины - $mid_proj<br>
Тип проектора для Большой витрины - $large_proj<br>

"; // Текст письма

// Результат
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'ok';
}
?>
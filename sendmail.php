<?php error_reporting(0);
$login = $_POST['user_name'];
$mail = $_POST['user_email'];
$town = $_POST['city'];
$comment = $_POST['comment'];
$subj = "First letter";
$text = "Привіт, ".$login."!<br>Це твоє перше поштове повідомлення надіслане за допомогою PHP<br>Ваша ел.пошта: ".$mail."<br>Ваше місто: ".$town."<br>Ваше повідомлення: ".$comment;

mail("ipolishuk790@gmail.com", $subj, $text, "Content-type: text/html; charset=utf-8 \r\n");
echo ($comment);


<?php error_reporting(0);
$fio = $_POST['names'];
$password = $_POST['user_p-w'];
$city = $_POST['town'];
$radiobutton = $_POST['gender-radio'];
$file = $_POST['photo'];
$comment = $_POST['tform-comment'];
$subj = "Fourth letter";
$text = "Привіт, ".$fio."!<br>Це твоє 4-те поштове повідомлення надіслане за допомогою PHP<br>Ваш пароль: ".$password."<br>Ваше місто: ".$city."<br>Ваша стать: ".$radiobutton."<br>Ваше повідомлення: ".$comment;

mail("ipolishuk790@gmail.com", $subj, $text, "Content-type: text/html; charset=utf-8 \r\n");
echo ($comment);


<?php error_reporting(0);
$login = $_POST['user_name'];
$mail = $_POST["user_email"];
$town = $_POST['city'];
$comment = $_POST['comment'];
$subj = "First letter";
$text = "Привіт, '.$login['user_name']!' \nЦе твоє перше поштове повідомлення надіслане за допомогою PHP\n Ваше повідомлення: '.$comment['comment'].';

mail($subj, $text, "Content-type: text/html; charset=utf-8 \r\n");
echo ("$comment.");
?>

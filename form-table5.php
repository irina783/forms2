<?php error_reporting(0);
$name = $_POST['name5'];
$mail = $_POST['user_email5'];
$phone = $_POST['user_tel5'];
$country = $_POST['country'];
$address = $_POST['adresa'];
$misto = $_POST['misto'];
$house = $_POST['house'];
$postIndex = $_POST['post-index'];
$checkrule = $_POST['rules'];
$subj = "Fifth letter";
$text = "Привіт, ".$name."!<br>Це твоє 5-те поштове повідомлення надіслане за допомогою PHP<br>Ваша пошта: ".$mail."<br>Ваш телефон: ".$phone."<br>Ваша країна: ".$country."<br>Ваше місто: ".$misto."<br>Ваш будинок: ".$house."<br>Поштовий індекс: ".$postIndex." Ви відмітили: ".$checkrule;
$information = "Привіт, ".$name."!<br>Ви успішно оформили покупку.<br>Ваші дані для доставки товару<br>Ваша пошта: ".$mail."<br>Ваш телефон: ".$phone."<br>Ваша країна: ".$country."<br>Ваше місто: ".$misto."<br>Ваш будинок: ".$house."<br>Поштовий індекс: ".$postIndex." Ви відмітили: ".$checkrule;

mail("ipolishuk790@gmail.com", $subj, $text, "Content-type: text/html; charset=utf-8 \r\n");
echo ($information);


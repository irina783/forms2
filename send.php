<?php error_reporting(0);
$radio = $_POST['radio'];
$delivery = $_POST['delivery2'];
$delivery1 = $_POST['delivery2'];
$data = $_POST['date'];
$subj = "Second letter";
$text = "Ваш спосіб доставки: ".$radio."<br>Ви відмітили: ".$delivery."<br>Статус: ".$delivery1."<br>Дата замовлення: ".$data;
mail("ipolishuk790@gmail.com", $subj, $text, "Content-type: text/html; charset=utf-8 \r\n");
echo($text);
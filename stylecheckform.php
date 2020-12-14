<?php error_reporting(0);
$radio = $_POST['gender'];
$checknews = $_POST['news1'];
$checkbuy = $_POST['buy1'];
$checklight = $_POST['light1'];
$subj = "Third letter";
$text = "Стать: ".$radio."<br>Ви відмітили:<br>".$checknews."<br>".$checkbuy."<br>".$checklight;
mail("ipolishuk790@gmail.com", $subj, $text, "Content-type: text/html; charset=utf-8 \r\n");
echo($text);

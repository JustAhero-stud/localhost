<?php
$mysqli = new mysqli("localhost", "root", "", "basketlake");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$headline = $_POST['headline'];
$announce = $_POST['announce'];
$text = $_POST['text'];
$img = $_POST['img'];

$stmt = $mysqli->prepare("INSERT INTO news(header, anounnce, img, alltext) VALUES ( ?, ?, ?, ?)");
$stmt->bind_param("ssss", $headline, $announce, $img, $text);
$stmt->execute();

header('Location: news.php', false);




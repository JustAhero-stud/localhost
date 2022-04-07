<?php
session_start();
$id = (int)$_GET['id'];
$mysqli = new mysqli("localhost", "root", "", "basketlake");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $id;
$headline = $_POST['headline'];
$announce = $_POST['announce'];
$text = $_POST['text'];
$img = $_POST['img'];

$stmt = $mysqli->prepare("UPDATE news set header = ?,anounnce = ?,img = ?,alltext = ? where id=$id");
$stmt->bind_param("ssss", $headline, $announce, $img, $text);
$stmt->execute();

header('Location: news.php', false);
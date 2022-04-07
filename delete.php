<?php
$id=(int)$_GET['id'];
$mysqli = new mysqli("localhost", "root", "", "basketlake");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$stmt = $mysqli->prepare("DELETE FROM basketlake.news WHERE id = (?)");
$stmt->bind_param ("i", $id);
$stmt->execute();

header('Location: news.php', false);
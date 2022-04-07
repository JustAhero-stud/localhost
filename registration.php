<?php
session_start();
$_SESSION['reg'] = 1;
$mysqli = new mysqli("localhost", "root", "", "basketlake");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$nickname = $_POST['nickname'];
$password = sha1($_POST['password']);
$name = $_POST['name'];
$privilege = '2';
$stmt = $mysqli->prepare("SELECT * FROM profile WHERE nickname = ?");
$stmt->bind_param("s", $nickname);
$stmt->execute();
if ($stmt->fetch()) {
    header('Location: authorization.php', false);
    $_SESSION['reg'] = 0;
} else {
    $stmt = $mysqli->prepare("INSERT INTO profile(nickname, password, name, privilege) VALUES ( ?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nickname, $password, $name, $privilege);
    $stmt->execute();
    header('Location: index.php', false);
    $_SESSION['reg'] = 1;
}
<?php
session_start();
ob_start();

$_SESSION['admin'] = 0;
$_SESSION['login'] = 1;
$mysqli = new mysqli("localhost", "root", "", "basketlake");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$nick = $_POST['nickname'];
$pass = sha1($_POST['password']);
$stmt = $mysqli->prepare("SELECT privilege FROM profile WHERE nickname = ? and password = ? ");
$stmt->bind_param("ss", $nick, $pass);
$stmt->execute();
$stmt->bind_result($prim);
if ($stmt->fetch())
{
    echo $prim;
    if ($prim === '1') {
        $_SESSION['admin'] = 1;
        $_SESSION['login'] = 1;
    }
    if ($prim === '2')
    {
        $_SESSION['admin'] = 2;
        $_SESSION['login'] = 1;
    }
     header('Location: index.php', false);

} else
{
    $_SESSION['login'] = 0;
    header('Location: authorization.php', false);
}

<?php
ob_start();
session_start();
?>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Authorization</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>
</head>
<body>
<?php
include('menu.php');
?>

<div class="container ">
    <div class="row my-5 border tab">
        <form method="post" class="mt-3" id="add" action="login.php">

            <div>
                <p>Nickname:</p>
                <textarea name="nickname" class="textarea" required></textarea>
            </div>
            <div>
                <p>Password:</p>
                <textarea name="password" class="textarea" required></textarea>

            </div>
            <div>
                <input type="submit" value="Login" class="send">
            </div>

        </form>
    </div>
</div>
<div class="container">
    <div class="row my-5 tab border">
        <form method="post" class="mt-3" id="add" action="registration.php">

            <div>
                <p>Nickname:</p>
                <textarea name="nickname" class="textarea" required></textarea>
            </div>
            <div>
                <p>Password:</p>
                <textarea name="password" class="textarea" required></textarea>
            </div>
            <div>
                <p>Name:</p>
                <textarea name="name" class="textarea" required></textarea>
            </div>
            <div>
                <input type="submit" value="Registration" class="send">
            </div>

        </form>
    </div>
</div>
<?php
if ($_SESSION['login'] === 0) {
    ?>
    <script>
        $(document).ready(function (){
            alert("Incorrectly entered username or password")
        })
    </script>
    <?php
    $_SESSION['login'] = 3;
}
?>
<?php
if ($_SESSION['reg'] === 0) {
    ?>
    <script>
        $(document).ready(function (){
            alert("A user with this login already exists")
        })
    </script>
    <?php
    $_SESSION['reg'] = 3;
}
?>
</body>

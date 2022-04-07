<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "basketlake");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$results = $mysqli->query("SELECT * FROM news");
?>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet">
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
</head>

<body>
    <?php
    include('menu.php');
    ?>
<div class="container border tab">
    <?php
    while ($row = $results->fetch_object()) {
    ?>
    <div class="row my-2 ">
        <div data-fancybox href='<?= "$row->img"?>' class="col-sm-5">
            <img src='<?= "$row->img"?>' alt='' class="img-thumbnail w-100">
        </div>
        <div class="col-sm-7">
            <H2> <a href="one-news.php?id=<?= $row->id ?>" class="header"><?= $row->header ?> </a></H2>
            <H2 class="announce"><?= $row->anounnce ?></H2>
        </div>
    </div>
        <?php
    }
    ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</body>


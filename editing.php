<?php
$id = (int)$_GET['id'];
$mysqli = new mysqli("localhost", "root", "", "basketlake");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$results = $mysqli->query("SELECT * FROM news where id = $id");
$news = $results->fetch_object();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet">
</head>

<body>
    <?php
    include('menu.php');
    ?>
    <div class="container tab">
    <form method="post" class="border" id="add" action="edit-news.php?id=<?php echo $id ?>">
        <div class="row">
        <div class="mb-3">
            <p>Headline:</p>
            <textarea name="headline" rows="2" class="textarea" required><?= $news->header ?></textarea>
        </div>

        <div class="mb-3">
            <p>Announce:</p>
            <textarea name="announce" rows="2" class="textarea" required><?= $news->anounnce ?></textarea>
        </div>
        <div class="mb-3">
            <p>Image address:</p>
            <textarea name="img" class="textarea" required><?= $news->img ?></textarea>
        </div>
        <div class="mb-3">
            <p>Full text:</p>
            <textarea name="text" class="textarea" required><?= $news->alltext ?></textarea>
        </div>
        <div class="col">
            <input type="submit"  value="Send" class="send">
        </div>
    </form>
    </div>

</body>
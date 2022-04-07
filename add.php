<?php
session_start();
?>
<!DOCTYPE html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet">
</head>

<body>

    <?php
    include ('menu.php');
    ?>
    <div class="container tab border">
    <form method="post" class="mt-3 mb-3" id="add" action="add-news.php">
        <div class="row">
        <div >
            <p>Headline:</p>
         <textarea name="headline" class="textarea" required></textarea>
        </div>
        <div>
            <p>Announce:</p>
            <textarea name="announce"  class="textarea" required></textarea>
        </div>
        <div >
            <p>Image address:</p>
            <textarea name="img" class="textarea" required></textarea>
        </div>
        <div >
            <p>Full text:</p>
            <textarea name="text" class="textarea" required></textarea>
        </div>
        <div  >
            <input type="submit" value="Send" class="send">
         </div>
        </div>
    </form>

</body>
<?php
session_start();
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
    <title><?php echo $news->header?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet">
</head>
<body>

    <?php
    include('menu.php');
    ?>
    <div class="container tab">
        <div class="row my-2">
            <div class="col-sm-3">
                <img src='<?php echo "$news->img"?>' alt='' class="w-100">
            </div>
            <div class="col-sm-8">
            <p class="header"> <?php echo $news->header ?></p>
            <p class="announce"> <?php echo $news->alltext ?></p>
            </div>
        </div>
            <div class="row ">
                <?php
                if (isset($_SESSION['admin']) && ($_SESSION['admin'] === 1)) {
                ?>
                    <p><a href="editing.php?id=<?php echo $id ?>" style="color: blue">Edit</a></p>
                    <button type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmDelete">Delete</button>
                <?php
                }
                ?>
            </div>
        </div>

    <div class="modal fade" id="confirmDelete" tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteLabel">Verification</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    <h5>Are you sure you want to delete this news?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <a href="delete.php?id=<?php echo $id ?>" class="btn btn-danger btn-ok">Yes</a>
                </div>
            </div>
        </div>
    </div>
</body>


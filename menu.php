<div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent"
                    aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navContent" class="collapse navbar-collapse">
                <a href="index.php" class="non menu"> BasketLake </a>
                <ul class="navbar-nav me-auto mb-3 mb-lg-0 menu">
                    <li class="nav-item ">
                        <a href="news.php" class="nav-link menu"> News</a>
                    </li>
                    <li class="nav-item">
                        <a href="champ.php" class="nav-link menu">Last 5 titles</a>
                    </li>
                    <?php
                    session_start();

                    if (isset($_SESSION['admin']) && ($_SESSION['admin'] > 0)) {
                        ?>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link menu">Logout</a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="nav-item">
                            <a href="authorization.php" class="nav-link menu">Login</a>
                        </li>
                        <?php
                    }
                    if (($_SESSION['admin'] === 1)) {
                        ?>
                        <li class="nav-item">
                            <a href="add.php" class="nav-link menu">Addnews</a>
                        </li>
                        <?php
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
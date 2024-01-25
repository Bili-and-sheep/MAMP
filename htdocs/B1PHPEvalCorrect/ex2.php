<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>B1-1A-PHP-Evaluation finale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="row">
                    <div class="col-4">
                        <img src="img/logo-faure.png" alt="Gabriel Fauré Logo" width="272" height="66" class="d-inline-block align-text-top">
                    </div>
                    <div class="col-8">
                        <h1>BTS SIO - 1ère Année - Evaluation PHP</h1>
                    </div>
                </div>
            </a>
        </div>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link <?php if (ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME)) == 'Index')
                    echo 'active'?>" aria-current="page" href="index.php">Consignes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if (ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME)) == 'Ex1')
                    echo 'active'?>" href="ex1.php">Exercice 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if (ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME)) == 'Ex2')
                    echo 'active'?>" href="ex2.php">Exercice 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if (ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME)) == 'Ex3')
                    echo 'active'?>" href="ex3.php">Exercice 3</a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <div class="row mx-3 mt-3">
        <div class="col-6">
            <p>Q1: Remplacer une partie du code HTML pour y intégrer du code PHP qui affichera le contenu d'un tableau numéroté PHP contenant la liste des fruits</p>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fruits</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th class="table-success" scope="row">1</th>
                    <td class="table-danger">Pommes</td>
                </tr>
                <tr>
                    <th class="table-success" scope="row">2</th>
                    <td class="table-danger">Poires</td>
                </tr>
                <tr>
                    <th class="table-success" scope="row">3</th>
                    <td class="table-danger">Pêches</td>
                </tr>
                <tr>
                    <th class="table-success" scope="row">4</th>
                    <td class="table-danger">Abricots</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-6">
            <p>Q2: Compléter/corriger le code pour afficher le contenu du tableau associatif donné</p>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Game player</th>
                    <th scope="col">High score</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $players = array('Johnatan' => 24, 'Yohan' => 666, 'Thalia' => 876, 'Zran' => 999, 'Mourad' => 456);
                //code PHP à compléter
                ?>
                <tr>
                    <th class="table-success" scope="row"><?php echo $playerName ?></th>
                    <td class="table-danger"><?php echo $score ?></td>
                </tr>
                <?php
                //code PHP à compléter
                ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


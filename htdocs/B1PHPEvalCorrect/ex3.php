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
            <p>Avant de commencer cet exercice, vous devez installer la base de données fournie en exécutant le script <a href="phpgame.sql"><code>phpgame.sql</code></a> dans PHPMyadmin</p>
            <p>Schema relationnel de la base de données:</p>
            <p><code>player (<u>id</u>, name, age)</code></p>
            <p><code>game (<u>id</u>, #playerid, score, date) - playerid fait référence à id dans player</code></p>
            <p>Pour extraire les données de la bdd, vous utiliserez la requête s'appuyant sur la vue <strong>highscores</strong>: </p>
            <p><code>SELECT name, score FROM highscores</code></p>
            <p>Q1: Compléter le code pour afficher la liste des joueurs et leurs high scores à partir des données de la base de données</p>
            <p>Q2: Faites évoluer votre code pour n'afficher que les joueurs avec un high score supérieur à 500.</p>
            <p>Q3: Vous donnerez la requête SQL utilisant les tables <strong>player</strong> et <strong>game</strong> permettant de lister les noms des joueurs et leurs scores mais uniquement les scores supérieurs à 500.</p>
            <p>Réponse Q3: votre requête <code><!-- écrivez votre requête ici --></code></p>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Game player</th>
                    <th scope="col">High score</th>
                </tr>
                </thead>
                <tbody>
                <?php
                //code PHP à compléter - connexion à la bdd avec PDO, la requête et la boucle while pour lire les lignes de la table
                ?>
                <tr>
                    <th class="table-success" scope="row"><?php //affichage de la colone 'name' ?></th>
                    <td class="table-danger"><?php //affichage de la colonne 'score' ?></td>
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


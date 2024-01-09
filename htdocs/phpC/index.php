<!-- http://localhost/phpC/index.php -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Premier site</title>
    <link rel="stylesheet" href="css/knacss.min.css">
    <link rel="stylesheet" href="css/indexSansGrid.css">
<?php 
try {
    $bdd = new PDO( 'mysql: host=localhost; dbname=parnal; charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die( 'Erreur: ' . $e->getMessage());
}
?>
</head>

<body>
    <header>
        <img src="img/logoCouleur.jpg" />
        <div>
            <p class="textHeader" id="deb">Pour être enchanté......</p>
            <p class="textHeader" id="fin">....rien ne vaut une séance de ciné</p>
        </div>
        <nav>
            <ul>
                <li><a id="bp1" href="#film1">MJÓLK, La guerre du lait</a></li>
                <li><a id="bp2" href="#film2">Pour Sama</a></li>
                <li><a id="bp3" href="#film3">Once Upon...</a></li>
                <li><a id="bp4" href="#film4">Roubaix, une lumière</a></li>
                <li><a id="bp5" href="#film5">The bra</a></li>
            </ul>
        </nav>
    </header>

    <!-- Ajouter ici du code php pour lire la table film de la base de données
 et démarrer une boucle while qui va, à chaque ligne de la table film, construire le bloc <article>
 le numero du film doit être variable-->
 
    <article class="tab" id="film<?phpecho('$id') ?>">
        <!-- l'affiche du film doit être variable avec du code php -->
        <img src="img/films/THECOUNTYAFFICHE.JPG" />
        <div>
            <!-- mettre du code php à la place de ces éléments h1,h2,h3,h4,p -->
            <?php
            $films = array(
                1 => array(
                    'id' => 1,
                    'titre' => 'MJOLK, la guerre du lait',
                    'pays' => 'Pays du film',
                    'duree' => 'Durée du film',
                    'realisateur' => 'Nom du réalisateur',
                    'interpretes' => array('Interprète 1', 'Interprète 2', 'Interprète 3'),
                    'synopsis' => 'Synopsis du film'
                ),
                // Ajoutez les autres films de la même manière
            );
            
            // Affichez les détails du film
            echo '<div>';
            echo '<h1>' . $films[1]['titre'] . '</h1>';
            echo '<h2>' . $films[1]['pays'] . ', Durée ' . $films[1]['duree'] . '</h2>';
            echo '<h3>Réalisateur : ' . $films[1]['realisateur'] . '</h3>';
            echo '<h4>Interprètes : ' . implode(', ', $films[1]['interpretes']) . '</h4>';
            echo '<p>Synopsis : ' . $films[1]['synopsis'] . '</p>';
            echo '</div>';
            ?>
        </div>
    </article>
    <!-- fermer la boucle et vous pouvez vous passer des blocs <article> suivants -->
        <?php ?>
    <footer>
        <p>Cinéma le parnal, 260 rue St François de Sales 74570 Fillière</p>
    </footer>
    <script src="js/jquery-3.4.1.min.js"></script>
</body>

</html>
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
            <li class="nav-item">
                <a class="nav-link <?php if (ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME)) == 'Ex3')
                    echo 'active'?>" href="ex3.php">Exercice 3</a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <div class="row mx-3">
        <p><u>NB:</u> à chaque exercice correspond un fichier .php (Exercice 1 = fichier ex1.php)</p>
        <p>Toutes vos réponses sont données dans les fichiers PHP. Vous devez commenter votre code au maximum,
            surtout si vous avez des difficultés, pour m'expliquer ce que vous avez compris et ce qui vous bloque.
            Ceci pourra vous apporter des points supplémentaires.</p>
        <h6>Rappel sur les commentaires:</h6>
        <p>Les commentaires en PHP s'ajoutent après <code>//</code> ou entre <code>/*</code> et <code>*/</code></p>
        <p>Les commentaires en HTML s'ajoutent entre <code>< </code>suivi de 2 tirets <code>--</code>  et <code>--></code></p>
        <h3>Exercice 1: conditions et boucles</h3>
        <p>Q1: Expliquer le rôle de la fonction isset() et ce qu'elle retourne. Donnez votre réponse en commentaires dans le fichier ex1.php (emplacement prévu à cet effet)</p>
        <p>Q2: Corriger le code pour que, quand on valide le formulaire, l'exercice ne s'affiche que si l'on a 18 ans ou plus. Notez que la variable <code>$_GET['age']</code> contient l'age saisi dans le formulaire.</p>
        <p>Q3: Voir la consigne dans l'exercice 1 et coder ce qui est demandé</p>

        <h3>Exercice 2: tableaux numérotés et associatifs</h3>
        <p>Q1: Remplacer une partie du code HTML pour y intégrer du code PHP qui affichera le contenu d'un tableau numéroté PHP contenant la liste des fruits</p>
        <p>Q2: Compléter/corriger le code pour afficher le contenu du tableau associatif donné</p>
        <h3>Exercice 3: Connexion à la base de données</h3>
        <p>Q1: Compléter le code pour afficher la liste des joueurs et leurs high scores à partir des données de la base de données</p>
        <p>Q2: Vous donnerez la requête SQL utilisant les tables <strong>player</strong> et <strong>game</strong> permettant d'extraire les noms des joueurs et leurs high scores</p>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
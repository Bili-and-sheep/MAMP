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
    <!--
     Notez ici votre réponse à la question Q1:
     -->
    <div class="row mx-3">
        <?php if (!isset($_GET['age'])) { ?>
        <form action="ex1.php" method="get">
            <div class="mb-3">
                <label for="age" class="form-label">Saissez votre age</label>
                <input type="number" class="form-control" id="age" name="age" aria-describedby="ageHelp">
                <div id="ageHelp" class="form-text">Cet exercice n'est accessible qu'aux personnes de 18 ans ou plus</div>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>

        <?php } else { 
            $age = intval($_GET['age']);
            if ($age >= 18) { ?>
            <h2>Bienvenue dans l'exercice 1</h2>
                <p>Vous devez afficher ci-dessous, autant de fois que l'age saisi, le message: "J'ai x ans et dans 1 an, à x+1 ans, je serai un(e) boss en PHP"</p>
                <p>où x = l'age saisi dans le formulaire d'accès à la page</p>
            
            <?php } else { ?>
                <div class="alert alert-primary" role="alert">
                <p>Désolé, cet exercice est réservé aux personnes de 18 ans ou plus.</p>
                </div>
                <form action="ex1.php" method="get">
                    <div class="mb-3">
                        <label for="age" class="form-label">Saissez votre age</label>
                        <input type="number" class="form-control" id="age" name="age" aria-describedby="ageHelp">
                    <div id="ageHelp" class="form-text">Cet exercice n'est accessible qu'aux personnes de 18 ans ou plus</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
            <?php } ?>
        <?php } ?>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


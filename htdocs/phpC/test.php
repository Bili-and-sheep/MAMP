<?php 
 $host = '127.0.0.1';
 $dbname = 'parnal';
 $user = 'root';
 $passeword = 'u}iu42QH=6S,7f';

try {
    $bdd = new PDO( 'mysql: host=$host; dbname=$dbanme; charset=utf8', $user, $passeword);
} catch (Exception $e) {
    die( 'Erreur: ' . $e->getMessage());
}

echo '<div>';
echo '<h1>' . $film[1]['titre'] . '</h1>';
echo '<h2>' . $film[1]['pays'] . ', Durée ' . $film[1]['duree'] . '</h2>';
echo '<h3>Réalisateur : ' . $film[1]['realisateur'] . '</h3>';
echo '<h4>Interprètes : ' . implode(', ', $film[1]['interpretes']) . '</h4>';
echo '<p>Synopsis : ' . $film[1]['synopsis'] . '</p>';
echo '</div>';
?>
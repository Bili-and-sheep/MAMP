<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>IpLoc</title>
</head>
<body>
    <br>
    <div class="container">
        <a href="index.php" class="btn btn-primary">Retour vers la page d'accueil </a>
        <br>
        <?php
            $input = $_GET['input'];
            $iploc = null;

            // Vérifier si c'est une adresse IP valide
            if (filter_var($input, FILTER_VALIDATE_IP)) {
                $iploc = getIpLocation($input);
            } else {
                // Ce n'est pas une adresse IP, essayez de résoudre le nom de domaine
                $ip = gethostbyname($input);
                if ($ip !== $input) {
                    $iploc = getIpLocation($ip);
                } else {
                    echo("$input is not a valid IP address or a valid domain name");
                }
            }

            function getIpLocation($ip) {
                $url = 'http://ip-api.com/json/'.$ip;
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $output = curl_exec($ch);
                $retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);
                return json_decode($output, true);
            }
        ?>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Information</th>
                    <th scope="col">Valeur</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($iploc !== null) {
                    foreach ($iploc as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $key ?></td>
                            <td><?php echo $value ?></td>
                        </tr>
                    <?php
                    }
                }
                ?>
            </tbody>
        </table>

        
    </div>
</body>
</html>
<!-- ¨ -->
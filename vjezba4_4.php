
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Prosti brojevi</title>
</head>
<body>

    <h2>Prosti brojevi manji od 100</h2>

    <?php

    function jeProst($broj) {

        if ($broj <= 1) {
            return false;
        }

        for ($i = 2; $i < $broj; $i++) {
            if ($broj % $i == 0) {
                return false;
            }
        }

        return true;
    }

    echo "<p>Prosti brojevi manji od 100 su:</p>";

    for ($broj = 2; $broj < 100; $broj++) {

        if (jeProst($broj)) {
            echo $broj . " ";
        }
    }

    ?>

</body>
</html>

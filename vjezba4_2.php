
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Radno vrijeme dućana</title>
</head>
<body>

    <h2>Radno vrijeme dućana</h2>

    <?php

    function provjeriRadnoVrijeme() {

        $dan = date("N");
        $vrijeme = date("H:i");

        if ($dan == 7) {
            return "Dućan je trenutno ZATVOREN (nedjelja).";
        }
        else if ($dan == 6) {
            if ($vrijeme >= "09:00" && $vrijeme < "14:00") {
                return "Dućan je trenutno OTVOREN.";
            }
            else {
                return "Dućan je trenutno ZATVOREN.";
            }
        }
        else {
            if ($vrijeme >= "08:00" && $vrijeme < "20:00") {
                return "Dućan je trenutno OTVOREN.";
            }
            else {
                return "Dućan je trenutno ZATVOREN.";
            }
        }
    }

    echo provjeriRadnoVrijeme();

    ?>

</body>
</html>

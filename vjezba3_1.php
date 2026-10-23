
<?php
$zamisljeniBroj = rand(1, 9);
$poruka = "";
$boja = "";

if (isset($_GET["broj"])) {
    $uneseniBroj = $_GET["broj"];

    if ($uneseniBroj == $zamisljeniBroj) {
        $poruka = "Pogodak, probaj ponovno!";
        $boja = "green";
    } else {
        $poruka = "Krivo, probaj ponovno!";
        $boja = "red";
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Igra - pogodi broj</title>
</head>
<body>

    <h3>Igra (pogodi broj)</h3>

    <form method="get">
        <label for="broj">Upiši jedan broj od 1 do 9:</label>

        <input type="number" id="broj" name="broj"
               min="1" max="9" required>

        <button type="submit">Pokušaj</button>
    </form>

    <?php
    if ($poruka != "") {
        echo "<button style='background-color: $boja; color: white;'>";
        echo $poruka;
        echo "</button>";

        echo "<p>Zamišljeni broj je $zamisljeniBroj</p>";
    }
    ?>

</body>
</html>

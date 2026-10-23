
<?php
$c = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];

    $c = (3 * $a - $b) / 2;
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Izračun vrijednosti c</title>
</head>
<body>

    <form method="post">
        <label for="a">Vrijednost a:</label>
        <input type="number" id="a" name="a" step="any" required>

        <br><br>

        <label for="b">Vrijednost b:</label>
        <input type="number" id="b" name="b" step="any" required>

        <br><br>

        <button type="submit">Pošalji</button>
    </form>

    <?php
    if ($c !== "") {
    echo "<h3>a = $a</h3>";
    echo "<h3>b = $b</h3>";
    echo "<h3>c = (3 * $a - $b) / 2 = $c</h3>";
    }
    ?>

</body>
</html>

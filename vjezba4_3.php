
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Brojanje riječi</title>
</head>
<body>

    <h2>Zadatak str_word_count</h2>

    <form method="POST">
        <label>Unesi rečenicu:</label><br><br>

        <input type="text" name="recenica" size="60" required>

        <br><br>

        <button type="submit" name="posalji">
            Ispiši broj riječi
        </button>
    </form>

    <?php
    if (isset($_POST["posalji"])) {

        $recenica = $_POST["recenica"];

        $brojRijeci = str_word_count($recenica);

        echo "<p>Uneseni niz: " . htmlspecialchars($recenica) . "</p>";

        echo "Sadrži " . $brojRijeci . " riječi.";
    }
    ?>

</body>
</html>

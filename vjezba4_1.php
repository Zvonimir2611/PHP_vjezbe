<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Odabir vozila</title>
</head>
<body>
 
    <h3>Označi vozilo:</h3>
 
    <form method="POST">
        <input type="radio" name="vozilo" value="Audi"> Audi<br>
        <input type="radio" name="vozilo" value="BMW"> BMW<br>
        <input type="radio" name="vozilo" value="Renault"> Renault<br>
        <input type="radio" name="vozilo" value="Citroen"> Citroen<br><br>
 
        <button type="submit" name="posalji">POŠALJI</button>
    </form>
 
    <?php
 
    if (isset($_POST['posalji'])) {
 
        if (isset($_POST['vozilo'])) {
            $vozilo = $_POST['vozilo'];
 
            echo "<h3>Odabrano vozilo je: " . htmlspecialchars($vozilo) . "</h3>";
        } else {
            echo "<script>alert('Molimo odaberite vozilo!');</script>";
        }
 
    }
 
    ?>
 
</body>
</html>
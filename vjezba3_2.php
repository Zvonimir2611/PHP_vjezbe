<!DOCTYPE html>
<html lang="hr">
<head>
<meta charset="UTF-8">
<title>Kalkulator (Switch naredba)</title>
</head>
<body>
 
<h2>Kalkulator (Switch naredba)</h2>
 
<form method="POST">
<label>Upiši prvi broj *</label>
<input type="number" name="broj1" step="any" required>
<br><br>
 
    <label>Upiši drugi broj *</label>
<input type="number" name="broj2" step="any" required>
<br><br>
 
    <p>Rezultat:</p>
 
    <button type="submit" name="operacija" value="+">+</button>
<button type="submit" name="operacija" value="-">-</button>
<button type="submit" name="operacija" value="*">*</button>
<button type="submit" name="operacija" value="/">/</button>
</form>
 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $broj1 = (float) $_POST["broj1"];
    $broj2 = (float) $_POST["broj2"];
    $operacija = $_POST["operacija"];
 
    switch ($operacija) {
        case "+":
            $rezultat = $broj1 + $broj2;
            break;
 
        case "-":
            $rezultat = $broj1 - $broj2;
            break;
 
        case "*":
            $rezultat = $broj1 * $broj2;
            break;
 
        case "/":
            if ($broj2 == 0) {
                $rezultat = "Nije moguće dijeliti s nulom!";
            } else {
                $rezultat = $broj1 / $broj2;
            }
            break;
 
        default:
            $rezultat = "Nepoznata operacija!";
    }
 
    echo "<h3>Rezultat: " . htmlspecialchars((string)$rezultat) . "</h3>";
}
?>
 
</body>
</html>
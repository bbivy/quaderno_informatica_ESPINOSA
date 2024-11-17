<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saluto</title>
</head>
<body>
    <?php
    $ora = date('H'); // Ottieni l'ora corrente (0-23)
    $saluto = "";

    // Determina il saluto in base all'ora
    if ($ora >= 8 && $ora < 12) {
        $saluto = "Buongiorno";
    } elseif ($ora >= 12 && $ora < 20) {
        $saluto = "Buonasera";
    } else {
        $saluto = "Buonanotte";
    }

    // Mostra il messaggio
    echo "<p>$saluto Paolo, benvenuto nella mia prima pagina PHP!</p>";
    ?>

    <!-- Pulsante per tornare indietro -->
    <button onclick="location.href='index.html'">Torna indietro</button>
</body>
</html>


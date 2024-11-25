<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saluto</title>
</head>
<body>
    <!-- Spiegazione del funzionamento logico -->
    <p>Questa pagina mostra un messaggio di saluto personalizzato in base all'ora corrente. Il saluto cambia in tre fasce orarie: 
    "Buongiorno" (8-12), "Buonasera" (12-20), e "Buonanotte" (dalle 20 in poi).</p>

    <br>
    <br>

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

<br>
<br>

    <!-- Pulsante per tornare indietro -->
    <button onclick="location.href='index.html'">Torna indietro</button>

    <!-- Footer -->
    <footer>
        <p>© 2024 Quaderno di Informatica di Yvette Espinosa</p>
        <p>Pagina realizzata per esercitazione: utilizzo di PHP per personalizzare contenuti in base all'ora corrente.</p>
    </footer>
</body>
</html>



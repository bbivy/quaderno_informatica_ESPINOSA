<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 3</title>
</head>
<body>
    <!-- Spiegazione del funzionamento logico -->
    <p>Questa pagina genera quattro schemi di asterischi usando cicli annidati in PHP. Ogni schema rappresenta una diversa disposizione degli asterischi:
    <ul>
        <li>(a) Asterischi in ordine crescente di righe.</li>
        <li>(b) Asterischi in ordine decrescente di righe.</li>
        <li>(c) Asterischi allineati a destra in ordine decrescente.</li>
        <li>(d) Asterischi allineati a destra in ordine crescente.</li>
    </ul>
    </p>

    <br><br>

    <?php
    // Imposta il numero di righe
    $rows = 10;

    // Schema (a)
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }

    echo '<br>'; // Separazione tra gli schemi

    // Schema (b)
    for ($i = $rows; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }

    echo '<br>'; // Separazione tra gli schemi

    // Schema (c)
    for ($i = $rows; $i >= 1; $i--) {
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo '&nbsp;';
        }
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }

    echo '<br>'; // Separazione tra gli schemi

    // Schema (d)
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo '&nbsp;';
        }
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }
    ?>
<br>
<button onclick="location.href='index.html'">Torna indietro</button>

    <!-- Footer -->
    <footer>
        <p>© 2024 Quaderno di Informatica di Yvette Espinosa</p>
        <p>Pagina realizzata per esercitazione: generazione di schemi di asterischi con PHP.</p>
    </footer>
</body>
</html>

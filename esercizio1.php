<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella pitagorica</title>
</head>
<body>

    <p>Questa pagina visualizza una tabella pitagorica che mostra i prodotti dei numeri da 1 a 10. Ogni cella della tabella rappresenta il risultato della moltiplicazione tra il numero della riga e il numero della colonna. La tabella è generata dinamicamente utilizzando PHP, che calcola il prodotto di ciascuna combinazione di numeri.</p>

    <table border="1">
        <thead>
            <tr>
                <th>&times;</th>
                <?php
                // Crea l'intestazione della prima riga con i numeri da 1 a 10
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Genera le righe della tabella
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                // Crea la prima cella di ogni riga (intestazione di riga)
                echo "<th>$i</th>";

                // Genera le celle con i prodotti
                for ($j = 1; $j <= 10; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <br>
    <br>
    <button onclick="location.href='index.html'">Torna indietro</button>

    <footer>
        <p>© 2024 Quaderno di Informatica</p>
        <p>Pagina realizzata per esercitazione: visualizzazione dinamica della tabella pitagorica in PHP.</p>
    </footer>
</body>
</html>


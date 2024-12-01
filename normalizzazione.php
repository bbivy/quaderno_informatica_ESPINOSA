<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio Normalizzazione</title>
</head>
<body>
    <h1>Normalizzazione delle Tabelle</h1>
    <p>In questo esercizio, vediamo come normalizzare una tabella, passando dalla forma non normalizzata (UNF) alla seconda forma normale (2NF) e infine alla terza forma normale (3NF).</p>

    <h2>1. Tabella Non Normalizzata (UNF)</h2>
    <p>"La tabella iniziale ha dati ripetuti, come i progetti di ogni dipendente, che sono messi insieme in una sola cella.</p>
    <?php
    // Tabella Non Normalizzata (UNF)
    $unf_headers = ["ID Dipendente", "Nome", "Progetti", "Ore"];
    $unf_data = [
        [1, "Mario Rossi", "Progetto A, Progetto B", "40, 30"],
        [2, "Luigi Bianchi", "Progetto A", "20"],
        [3, "Anna Verdi", "Progetto C", "50"]
    ];

    echo "<table border='1'>";
    echo "<thead><tr>";
    foreach ($unf_headers as $header) {
        echo "<th>$header</th>";
    }
    echo "</tr></thead><tbody>";
    foreach ($unf_data as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
    ?>

    <h2>2. Prima Forma Normale (1NF)</h2>
    <p>La Prima Forma Normale (1NF) richiede che ogni campo contenga valori atomici (cioè ogni cella della tabella deve contenere un solo valore, non una lista separata da virgole).</p>
    <p>Per ottenere la 1NF, si separano i progetti in righe differenti per ciascun dipendente.</p>
    <?php
    // Prima Forma Normale (1NF)
    $nf1_headers = ["ID Dipendente", "Nome", "Progetto", "Ore"];
    $nf1_data = [
        [1, "Mario Rossi", "Progetto A", 40],
        [1, "Mario Rossi", "Progetto B", 30],
        [2, "Luigi Bianchi", "Progetto A", 20],
        [3, "Anna Verdi", "Progetto C", 50]
    ];

    echo "<table border='1'>";
    echo "<thead><tr>";
    foreach ($nf1_headers as $header) {
        echo "<th>$header</th>";
    }
    echo "</tr></thead><tbody>";
    foreach ($nf1_data as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
    ?>

    <h2>3. Seconda Forma Normale (2NF)</h2>
    <p>La Seconda Forma Normale (2NF) richiede che la tabella sia già in 1NF e che tutti gli attributi non chiave dipendano interamente dalla chiave primaria (nessuna dipendenza parziale).</p>
    <p>In questo caso, dobbiamo separare le informazioni sui dipendenti e sui progetti in due tabelle: una per i dipendenti e una per i progetti, rimuovendo la ridondanza dei nomi dei dipendenti.</p>
    
    <?php
    // Seconda Forma Normale (2NF) - Dipendenti
    $nf2_headers_employees = ["ID Dipendente", "Nome"];
    $nf2_data_employees = [
        [1, "Mario Rossi"],
        [2, "Luigi Bianchi"],
        [3, "Anna Verdi"]
    ];

    echo "<h3>Dipendenti (2NF)</h3>";
    echo "<table border='1'>";
    echo "<thead><tr>";
    foreach ($nf2_headers_employees as $header) {
        echo "<th>$header</th>";
    }
    echo "</tr></thead><tbody>";
    foreach ($nf2_data_employees as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";

    // Seconda Forma Normale (2NF) - Progetti
    $nf2_headers_projects = ["ID Dipendente", "Progetto", "Ore"];
    $nf2_data_projects = [
        [1, "Progetto A", 40],
        [1, "Progetto B", 30],
        [2, "Progetto A", 20],
        [3, "Progetto C", 50]
    ];

    echo "<h3>Progetti (2NF)</h3>";
    echo "<table border='1'>";
    echo "<thead><tr>";
    foreach ($nf2_headers_projects as $header) {
        echo "<th>$header</th>";
    }
    echo "</tr></thead><tbody>";
    foreach ($nf2_data_projects as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
    ?>

    <h2>4. Terza Forma Normale (3NF)</h2>
    <p>La Terza Forma Normale (3NF) richiede che la tabella sia in 2NF e che non ci siano dipendenze transitive (cioè gli attributi non devono dipendere da altri attributi che non sono chiavi primarie).</p>
    <p> in questo caso, non c'è alcuna dipendenza transitiva tra i dati, ma per dimostrare la trasformazione in 3NF, si separano ulteriormente le informazioni in tabelle distinte in base a qualsiasi dipendenza transitiva se presente.</p>

    <?php
    // Terza Forma Normale (3NF) - Dipendenti
    $nf3_headers_employees = ["ID Dipendente", "Nome"];
    $nf3_data_employees = [
        [1, "Mario Rossi"],
        [2, "Luigi Bianchi"],
        [3, "Anna Verdi"]
    ];

    echo "<h3>Dipendenti (3NF)</h3>";
    echo "<table border='1'>";
    echo "<thead><tr>";
    foreach ($nf3_headers_employees as $header) {
        echo "<th>$header</th>";
    }
    echo "</tr></thead><tbody>";
    foreach ($nf3_data_employees as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";

    // Terza Forma Normale (3NF) - Progetti
    $nf3_headers_projects = ["ID Dipendente", "Progetto", "Ore"];
    $nf3_data_projects = [
        [1, "Progetto A", 40],
        [1, "Progetto B", 30],
        [2, "Progetto A", 20],
        [3, "Progetto C", 50]
    ];

    echo "<h3>Progetti (3NF)</h3>";
    echo "<table border='1'>";
    echo "<thead><tr>";
    foreach ($nf3_headers_projects as $header) {
        echo "<th>$header</th>";
    }
    echo "</tr></thead><tbody>";
    foreach ($nf3_data_projects as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
    ?>

    <br>
    <br>
    <button onclick="location.href='index.html'">Torna indietro</button>

    <footer>
        <p>© 2024 Quaderno di Informatica di Yvette Espunosa</p>
        <p>Pagina realizzata per esercitazione: visualizzazione dinamica delle tabelle di normalizzazione in PHP.</p>
    </footer>
</body>
</html>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <nav>
        <a href="index.html">Home</a>
    </nav>
</head>
<body>
    <!-- Spiegazione del funzionamento logico -->
    <p>Questa pagina permette di accedere a un'area riservata dopo aver inserito un nome utente e una password. Se i dati inseriti sono corretti (username: <strong>bubbletea</strong>, password: <strong>mango</strong>), viene mostrato un messaggio di benvenuto. Altrimenti, viene visualizzato un messaggio di errore.</p>

    <h3>Accesso a pagina riservata</h3>

    <form action="login.php" method="post">
        <label for="username"><b>Username</b></label>
        <input type="text" name="username" placeholder="Inserisci il nome utente" /><br />
        <label for="password"><b>Password</b></label>
        <input type="password" name="password" placeholder="Inserisci la password" /><br />
        <input name="submit" type="submit" value="Invia" />
    </form>

    <h3>Controllo credenziali</h3>
    <?php
        // Fixing the PHP variables and syntax
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $_POST["username"];
            $pwd = $_POST["password"];

            if ($user != "bubbletea" || $pwd != "mango") {
                echo "Attenzione! Nome utente o password sbagliati. Accesso negato.";
            } else {
                echo "<h4>Benvenuto nell'area riservata del sito</h4>";
            }
        }
    ?>

    <!-- Footer -->
    <footer>
        <p>© 2024 Quaderno di Informatica</p>
        <p>Pagina realizzata per esercitazione: controllo credenziali per accesso a pagina riservata in PHP.</p>
    </footer>
</body>
</html>

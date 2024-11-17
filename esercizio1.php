<html> 
    <head>
        <title> esercizio 1</title>
        
    </head>
    <body> 
    <table border="1" cellpadding="10" align="center">
            <?php
            $num = 1;
            for ($i = 0; $i < 10; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 10; $j++) {
                    echo "<td>$num</td>";
                    $num++;
                }
                echo "</tr>";
            }
            ?>
        </table>

        <button onclick="location.href='index.html'">torna indietro</button>
        
    </body>
</html>
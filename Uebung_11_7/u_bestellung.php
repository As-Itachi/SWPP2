<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestellung</title>
</head>
<body>
    
<h1>Honigbestellung</h1><br>
<p>Sie haben folgende Mengen bestellt:</p>
<br>

    <?php

        if(isset($_POST['submit'])){
            
            $_SESSION["akzienhonig"] = $_POST['akzienhonig'];
            $_SESSION["heidehonig"] = $_POST['heidehonig'];
            $_SESSION["kleehonig"] = $_POST['kleehonig'];
            $_SESSION["tannenhonig"] = $_POST['tannenhonig'];

            echo "Akzienhonig:" . $_SESSION["akzienhonig"] . "Gläser <br>";
            echo "Heidehonig:" . $_SESSION["heidehonig"] . "Gläser <br>";
            echo "Kleehonig:" . $_SESSION["kleehonig"] . "Gläser <br>";
            echo "Tannenhonig:" . $_SESSION["tannenhonig"] . "Gläser <br>";

        }

        echo "Die Session ID lautet " . session_id();
        echo "<br>";
        echo "<a href='/workspace_4BK_23_24_1/SWPP2/Uebung_11_7/u_abschluss.php'>Kontaktdaten ausfüllen</a>"

    ?>



</body>
</html>
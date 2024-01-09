<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular</title>
</head>
<body>
    
    <form action="u_bestellung.php" method="POST">

        <table border ="1" bgcolor="#D5F0F5" >

            <tr><th>Artikel</th><th>Menge</th></tr>

            <tr><td>Akzienhonig</td><td><input type="number" name="akzienhonig" min="0" value="0"></td></tr>
            <tr><td>Heidehonig</td><td><input type="number" name="heidehonig" min="0" value="0"></td></tr>
            <tr><td>Kleehonig</td><td><input type="number" name="kleehonig" min="0" value="0"></td></tr>
            <tr><td>Tannenhonig</td><td><input type="number" name="tannenhonig" min="0" value="0"></td></tr>

        </table>

        <br>
        <input type="submit" name="submit" value="submit">

    </form>

</body>
</html>
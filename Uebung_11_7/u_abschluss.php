<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abschluss</title>
</head>
<body>

    <?php

        if(isset($_POST['submit'])){

            if(empty($_POST['vorname'] ||empty($_POST['nachname'] || empty($_POST['wohnort'] || empty($_POST['email']))))){
                echo "Füllen sie die Plfichtfelder aus";
            }else{

                $_SESSION['vorname'] = $_POST['vorname'];
                $_SESSION['nachname'] = $_POST['nachname'];
                $_SESSION['wohnort'] = $_POST['wohnort'];
                $_SESSION['email'] = $_POST['email'];

                foreach ($_SESSION as $key => $value) { 
                echo $key . " = " . $value . "<br>";
                }
                $_SESSION = array();
                session_destroy();
  
            }

        }else{

    ?>

    <form method="POST" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">

        <h1>Honigbestellung</h1>
        <br>

        <p>Bitte geben Sie ihre Kontaktdaten ein</p>
        <br>

        <label for="vorname">Vorname:</label>
        <input type="text" id="vorname" name="vorname" required/> <br>

        <label for="nachname">Nachname:</label>
        <input type="text" id="nachname" name="nachname" required/> <br>

        <label for="wohnort">Wohnort:</label>
        <input type="text" id="wohnort" name="wohnort" required/> <br>

        <label for="email">E-Mail:</label>
        <input type="email" id="email" name="email" required/> <br>

        <input type="submit" name="submit" value="submit">

    </form>

    <?php
    }
    ?>
    
</body>
</html>
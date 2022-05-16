<?php include "db2.php"; include "db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sopranos | Homepagina</title>

    <link rel="stylesheet" href="css/bedankt.css">
    <link rel="icon" href="img/sopranos-logo.png">
</head>

<body>
    <div class="top" id="top">
        <div class="topLogo" id="topLogo">
        <a href="index.php"><img src="img/sopranos-logo.png" alt="Sopranos Logo"></a>
        </div>
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <a href="index.php" onclick="closeNav()">Homepagina</a>
            </div>
        </div>
        <span style="font-size:30px;cursor:pointer" class="openbtn" id="openbtn" onclick="openNav()"><i
                style="font-size: 27px;" class="fa fa-bars"></i></span>

            <h1>Bedankt!</h1>
            <p>Bedankt voor uw bestelling! De pizza zou snel klaar moeten staan voor u. Bedankt en eet smakelijk!</p>
            <p style="margin-top: 1vh;">U heeft besteld:<br><br></p>
            <?php
            
            foreach($data2 as $einde){
                echo "<h2>Tonno " . $einde["Tonno"] . "x voor: " . $einde["Tonno"]*5 . " euro" . "</h2>";
                echo "<h2>Vegetariano " . $einde["Vegetariano"] . "x voor: " . $einde["Vegetariano"]*4 . " euro" . "</h2>";
                echo "<h2>Formaggio " . $einde["Formaggio"] . "x voor: " . $einde["Formaggio"]*4 . " euro" . "</h2>";
                echo "<h2>Deluxe " . $einde["Deluxe"] . "x voor: " . $einde["Deluxe"]*6 . " euro" . "</h2><br>";
                echo "<h2>Naam op de bestelling: " . $einde["Klant_naam"] . ".</h2>";
                echo "<h2>Email op de bestelling: " . $einde["Klant_email"] . ".</h2>";
                echo "<h2>Adress en postcode op de bestelling: " . $einde["Klant_adress"] . " <strong>met postcode</strong> " . $einde["Klant_postcode"] . ".</h2><br>";
                echo "<h2>Met klant nummer: " . $einde["ID"] . "</h2>";
            }
            
            ?>

        <div class="dividerline4"></div>

        <div class="footer">
            <p>Copyright 2022 ©️ Sopranos</p>
        </div>

        <script src="js/index.js"></script>
        <script src="https://kit.fontawesome.com/9642bd3caa.js" crossorigin="anonymous"></script>
</body>

</html>
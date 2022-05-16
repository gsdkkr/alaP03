<?php
            
            include "db.php";

            if(isset($_POST["submit"])) {
                // Prepare sql database
                $sql = "INSERT INTO `pizzas` (`ID`, `Product_naam`, `Product_image`, `Product_prijs`, `Product_grootte`) VALUES (NULL, :pizzaname, :pizzaimg, :prijs, '0');";
                $stmt = $conn->prepare($sql);
                // Bind Params
                $stmt->bindParam(':pizzaname', $pizzaname);
                $stmt->bindParam(':pizzaimg', $pizzaimg);
                $stmt->bindParam(':prijs', $prijs);
                // Values uit de form
                $pizzaname = $_POST["pizzaname"];
                $pizzaimg = $_POST["pizzaimg"];
                $prijs = $_POST["prijs"];
                // Voert uit
                $stmt->execute();
              }
              if(isset($_POST["submit2"])) {
                // Prepare sql database
                $sql = "DELETE FROM `pizzas` WHERE `pizzas`.`Product_naam` = :pizzaname;";
                $stmt = $conn->prepare($sql);
                // Bind Params
                $stmt->bindParam(':pizzaname', $pizzaname);
                // Values uit de form
                $pizzaname = $_POST["pizzaname"];
                // Voert uit
                $stmt->execute();
              }
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sopranos | Homepagina</title>

    <link rel="stylesheet" href="css/bezorgen.css">
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
        <form action="" method="post">
        <span style="font-size:30px;cursor:pointer" class="openbtn" id="openbtn" onclick="openNav()"><i
                style="font-size: 27px;" class="fa fa-bars"></i></span>

        <label class="field field_v3 new_field_response_1">
            <input class="field__input" placeholder="b.v. Tonno" name="pizzaname">
            <span class="field__label-wrap">
                <span class="field__label">Pizza Naam</span>
            </span>
        </label>
        <label class="field field_v3 new_field_response_2">
            <input class="field__input" placeholder="b.v.gyazo.com" name="pizzaimg">
            <span class="field__label-wrap">
                <span class="field__label">Pizza Photo (link)</span>
            </span>
        </label>
        <label class="field field_v3 new_field_response_3">
            <input class="field__input" type="number" min="3" max="10" placeholder="b.v. 5.50" name="prijs">
            <span class="field__label-wrap">
                <span class="field__label">Prijs</span>
            </span>
        </label>
        <input class="newsButton newsButton3" type="submit" value="Toevoegen >>" name="submit">
        <input class="newsButton newsButton7" type="submit" value="Verwijderen >>" name="submit2">
            </form>
        
        <div class="dividerline4 dividerline5"></div>

        <div class="footer footer3">
            <p>Copyright 2022 ©️ Sopranos</p>
        </div>

        <script src="js/index.js"></script>
        <script src="https://kit.fontawesome.com/9642bd3caa.js" crossorigin="anonymous"></script>
</body>

</html>
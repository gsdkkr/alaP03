<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sopranos | Homepagina</title>

    <link rel="stylesheet" href="css/bezorgen.css">
    <link rel="stylesheet" href="css/bezorgen2.css">
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
                <a href="afbestellen.php" onclick="closeNav()">Terug</a>
                <a href="index.php" onclick="closeNav()">Homepagina</a>
            </div>
        </div>
        <span style="font-size:30px;cursor:pointer" class="openbtn" id="openbtn" onclick="openNav()"><i
                style="font-size: 27px;" class="fa fa-bars"></i></span>

        <label class="field field_v3 new_field_response_1">
            <input class="field__input" placeholder="b.v. John Smith">
            <span class="field__label-wrap">
                <span class="field__label">Volledige Naam</span>
            </span>
        </label>
        <label class="field field_v3 new_field_response_2">
            <input class="field__input" placeholder="b.v. contact@sopranos.nl">
            <span class="field__label-wrap">
                <span class="field__label">Email Adress</span>
            </span>
        </label>
        <label class="field field_v3 new_field_response_3">
            <input class="field__input" type="number" placeholder="b.v. 1">
            <span class="field__label-wrap">
                <span class="field__label">Hoeveelheid</span>
            </span>
        </label>
        <label class="field field_v3 new_field_response_4">
            <input class="field__input" type="number" placeholder="b.v. 15-25-35cm">
            <span class="field__label-wrap">
                <span class="field__label">Grootte</span>
            </span>
        </label>

        <a href="bedankt.php" style="text-decoration: none;"><div class="newsButton2">Bestel >></div></a>

        <div class="dividerline3"></div>

        <div class="footer2">
            <p>Copyright 2022 ©️ Sopranos</p>
        </div>

        <script src="js/index.js"></script>
        <script src="https://kit.fontawesome.com/9642bd3caa.js" crossorigin="anonymous"></script>
</body>

</html>
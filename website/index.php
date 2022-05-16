<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sopranos | Homepagina</title>

  <link rel="stylesheet" href="css/index1.css">
  <link rel="icon" href="img/sopranos-logo.png">
</head>

<body>
  <div class="top" id="top">
    <div class="topLogo" id="topLogo">
      <img src="img/sopranos-logo.png" alt="Sopranos Logo">
    </div>
    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
        <a href="#bestellenNav" onclick="closeNav()">Bestellen</a>
        <a href="#newsNav" onclick="closeNav()">Nieuws</a>
        <a href="#locationsNav" onclick="closeNav()">Locaties</a>
        <a href="#contactNav" onclick="closeNav()">Contact</a>
        <a href="#">&nbsp;</a>
        <a href="#">&nbsp;</a>
        <a href="beheer.php" style="color: red; text-transform: uppercase; font-weight: 700;" onclick="closeNav()">Beheer</a>
      </div>
    </div>

    <span style="font-size:30px;cursor:pointer" class="openbtn" id="openbtn" onclick="openNav()"><i
        style="font-size: 27px;" class="fa fa-bars"></i></span>

    <div class="topbtn" id="bestellenNav">
      <h1>Bestel online</h1>
      <p>U kunt nu ook online bestellen en laten bezorgen via Sopranos</p>
      <div class="bezorgbtn">
        <div class="bezorgenText">
          <h1>Bezorgen<br><br><i style="font-size: 55px;" class="fa-solid fa-truck"></i></h1>
        </div>
        <a href="bestellen.php">
          <div class="extrabtn">
            <h1>Bestellen</h1>
          </div>
        </a>
      </div>
      <div class="afhaalbtn">
        <div class="bezorgenText afhaalText">
          <h1>Afhalen<br><br><i style="font-size: 55px;" class="fa-solid fa-store"></i></h1>
        </div>
        <a href="afbestellen.php">
          <div class="extrabtn extrabtn2">
            <h1>Bestellen</h1>
          </div>
        </a>
      </div>
    </div>

    <div class="dividerline"></div>

    <div class="news" id="newsNav">
      <h1>Nieuws</h1>
      <p>Hieronder staat het meest recente nieuws van Sopranos</p>
      <div class="newsCard">
        <div class="newsPicture"><img src="http://www.fairfieldiowa.com/uploads/4/0/2/5/40254155/4057479_orig.jpg" alt="News Image"></div>
        <div class="newsTitle">
          <h1>Nieuwe Website</h1>
        </div>
        <div class="newsSummary">
          <p>Sopranos Pizza heeft zojuist hun eerste website gemaakt en open gezet tot het publiek!<br>
        Met deze website kunt u pizza bestellen en laten bezorgen!<br>U zou eventueel ook in contact kunnen komen met onze medewerkers!</p>
        </div>
        <div class="newsButton">Lees Meer >></div>
      </div>
    </div>

    <div class="dividerline2"></div>

    <div class="locations" id="locationsNav">
      <h1>Locaties</h1>
      <p>Hier kunt u de dichtsbijzijnde Sopranos winkel vinden</p>
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504542.806508602!2d3.036874240208181!3d52.1917339994677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNetherlands!5e0!3m2!1sen!2snl!4v1646741588156!5m2!1sen!2snl"
          width="80%" height="250vh" style="margin-left: 6.75vw; margin-top: 5vw; border-radius: 15px;"
          allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>

    <div class="dividerline3"></div>
    
    <div class="contact" id="contactNav">
      <h1>Contact</h1>
      <p>Hieronder zou u contact met Sopranos op kunnen leggen via de e-mail</p>
      <div class="afhaalbtn2">
        <div class="bezorgenText afhaalText">
          <h1>Contact<br><br><i style="font-size: 75px;" class="fa-solid fa-address-card"></i></h1>
        </div>
        <a href="mailto:Contact@Sopranos.nl">
          <div class="extrabtn extrabtn2 extrabtn3 extrabtn4">
            <h1>Contact</h1>
          </div>
        </a>
      </div>
    </div>

    <div class="dividerline4"></div>

    <div class="footer">
      <p>Copyright 2022 ©️ Sopranos</p>
    </div>



    <script src="js/index.js"></script>
    <script src="https://kit.fontawesome.com/9642bd3caa.js" crossorigin="anonymous"></script>
</body>

</html>
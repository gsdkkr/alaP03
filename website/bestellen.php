<?php
$servername = "localhost";
            $username = "root";
            $password = "";
            
            try {
              $conn = new PDO("mysql:host=$servername;dbname=sopranosala", $username, $password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //   echo 'Connected successfully';
            } catch(PDOException $e) {
              echo '<h1 style="font-size: 50px; color: red;"><strong>Connection failed: </strong></h1>' . $e->getMessage();
            }

$sql2 = "SELECT * FROM `pizzas`";
$stmt2 = $conn->query($sql2);
$data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sopranos | Homepagina</title>

  <link rel="stylesheet" href="css/bestellen.css">
  <link rel="icon" href="img/sopranos-logo.png">  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
<form method="POST">
  <div class="top" id="top">
    <div class="topLogo" id="topLogo">
    <a href="index.php"><img src="img/sopranos-logo.png" alt="Sopranos Logo"></a>
    </div>
    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
        <a href="index.php" onclick="closeNav()">Terug</a>
      </div>
    </div>
    <span style="font-size:30px;cursor:pointer" class="openbtn" id="openbtn" onclick="openNav()"><i
        style="font-size: 27px;" class="fa fa-bars"></i></span>
    <div class="news" id="newsNav">
      <h1>Bestellen</h1>
      <p>Hieronder kunt u alle pizza's van Sopranos bekijken en bestellen</p>
      
      <?php
  echo "<table class='table table-striped table-hover '>";
    foreach($data2 as $product){
        echo "<tr class='table-dark'>";
        echo "<td>";
        echo "<p>" . $product["Product_naam"] . "</p>";
        echo "</td>";
        echo "<td>";
        echo "<p>€" . $product["Product_prijs"] . "</p>";
        echo "</td>";
        echo "<td>";
        echo "<input type='number' name=" . $product["ID"] . "hv" . " min='0' placeholder='hoeveelheid'>";
        echo "</td>";
        echo "</tr>";
    }
  echo "</table>";
  ?>

<input type="text" name="vollnaam" id="vollnaam" placeholder="Volledige Naam">
        <input type="email" name="email" id="email" placeholder="Email Adress">
        <input type="text" name="postcode" id="postcode" placeholder="Postcode">
        <input type="text" name="adress" id="adress" placeholder="Adress">
    <input class="newsButton newsButton7" type="submit" name="submit" value="submit">
</form>

  <?php

  if(isset($_POST["submit"])) {
    // Prepare sql database
    $sql = "INSERT INTO `klant` (`ID`, `Klant_naam`, `Klant_email`, `Klant_postcode`, `Klant_adress`, `Tonno`, `Vegetariano`, `Formaggio`, `Deluxe`) VALUES (NULL, :vollnaam, :email, :postcode, :adress, :Tonnohv, :Vegetarianohv, :Formaggiohv, :Deluxehv);";
    // $sql = "INSERT INTO `klant` (`ID`, `Klant_naam`, `Klant_email`, `Klant_postcode`, `Klant_adress`, `Tonno`, `Vegetariano`, `Formaggio`, `Deluxe`) VALUES (NULL, 'test4', 'test', 'test2', 'test', '4', '3', '2', '1');";
    $stmt = $conn->prepare($sql);
    // Bind Params
    $stmt->bindParam(':vollnaam', $vollnaam);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':postcode', $postcode);
    $stmt->bindParam(':adress', $adress);

    $stmt->bindParam(':Tonnohv', $Tonnohv);
    $stmt->bindParam(':Vegetarianohv', $Vegetarianohv);
    $stmt->bindParam(':Formaggiohv', $Formaggiohv);
    $stmt->bindParam(':Deluxehv', $Deluxehv);
    // Values uit de form
    $vollnaam = $_POST["vollnaam"];
    $email = $_POST["email"];
    $postcode = $_POST["postcode"];
    $adress = $_POST["adress"];

    $Tonnohv = $_POST["1hv"];
    $Vegetarianohv = $_POST["2hv"];
    $Formaggiohv = $_POST["3hv"];
    $Deluxehv = $_POST["4hv"];
    // Voert uit
    $stmt->execute();

    header("Location: http://localhost/alap03/website/bedankt.php", TRUE, 301);
    exit();
};

    ?>
    <div class="dividerline4"></div>
    <div class="footer">
      <p>Copyright 2022 ©️ Sopranos</p>
    </div>
    <script src="js/index.js"></script>
    <script src="https://kit.fontawesome.com/9642bd3caa.js" crossorigin="anonymous"></script>
</body>

</html>
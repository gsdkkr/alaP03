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

$sql = "SELECT * FROM `pizzas`";
$stmt = $conn->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
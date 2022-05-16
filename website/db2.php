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

$sql2 = "SELECT * FROM klant ORDER BY ID DESC LIMIT 1";
$stmt2 = $conn->query($sql2);
$data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

?>
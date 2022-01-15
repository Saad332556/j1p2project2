<?php
    // Gegevens om contact te maken met de MySQL-server
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "optimalgaming";

    // De functie mysqli_connect maakt verbinding met de mysql-server en database
    $conn = mysqli_connect($servername, $username, $password, $databasename);

?>
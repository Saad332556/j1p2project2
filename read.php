<?php
    // We maken contact met de mysql-database
    include("connect_db.php");

    // We maken met de taal SQL een select-query, deze selecteert alle records uit de users tabel
    $sql = "SELECT * FROM `aanmelders`";

    // De functie mysqli_query() haalt het resultaat van de query op uit de database en zet het in $result
    $result = mysqli_query($conn, $sql);

    // De functie mysqli_fetch_assoc() maakt van de waarde in $result een associatief array
    $row = "";
    while ($record = mysqli_fetch_assoc($result)){
        $row = $row . "<tr>
                    <td>{$record['id']}</td>
                    <td>{$record['vnaam']}</td>
                    <td>{$record['infix']}</td>
                    <td>{$record['anaam']}</td>
                    <td>{$record['email']}</td>
                    <td>{$record['event']}</td>
                    <td>{$record['extra']}</td>
                    <td>
                        <a href='./update.php?id={$record['id']}'>
                            <i class='bi bi-pencil-square'></i>
                        </a>
                    </td>
                    <td>
                        <a href='./delete.php?id={$record['id']}'>
                            <i class='bi bi-trash-fill'></i>
                        </a>
                    </td>
                </tr>";
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- css bestand -->
        <link rel="stylesheet" href="style.css">


        <!-- Hamburger link for small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>OptimalGaming|Aangemelden</title>
    </head>
    <body class="read">
        <div class="topnav">
            <img src="img/optimalgaming_logov2.png" class="responsive">
            <div class="topnav" id="myTopnav">
                <ul>
                    <a href="index.php #inleiding">Home</a>
                    <a href="index.php #overons">Over ons</a>
                    <a href="index.php #events">Evenementen</a>
                    <a href="index.php #inschrijven">Inschrijven</a>
                    <a href="index.php #contact">Contact</a>
                    <a href="read.php">Aangemelden?</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i></a>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--- De tabel met gegevens uit de database --->
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Voornaam</th>
                                <th>Tussenvoegsel</th>
                                <th>Achternaam</th>
                                <th>E-mail</th>
                                <th>Event</th>
                                <th>Extra info</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php echo $row; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="nav.js"></script>
    </body>
</html>
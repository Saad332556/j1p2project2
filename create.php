<?php  

    // We maken contact met de mysql-database
    include("connect_db.php");


    $vnaam = $_POST["vnaam"];
    $infix = $_POST["infix"];
    $anaam = $_POST["anaam"];
    $email = $_POST["email"];
    $event = $_POST["event"];
    $extra = $_POST["extra"];

    $sql =  "INSERT INTO `aanmelders` (`id`, 
                                       `vnaam`,
                                       `infix`,
                                       `anaam`,
                                       `email`,
                                       `event`,
                                       `extra`)
                    VALUES 			  (NULL, 
                                       '$vnaam',
                                       '$infix',
                                       '$anaam',
                                       '$email',
                                       '$event',
                                       '$extra');";

  mysqli_query($conn, $sql);

  // Met een Header functie wordt je direct doorgestuurd naar een andere pagina

  $message1 = "<h3 class='notif_message1'>Dank je wel voor je aanmelding.<br> Je krijgt binnen een halfuur een bevestigingsmail van ons. We hopen je gauw te zien!</h3>";
  
  $message2 = "<h3 class='notif_message2'>Wacht a.u.b. tot de pagina vernieuwd wordt.</h3>";
  header("Refresh:6; url=./read.php");
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
   <!-- css bestand -->
   <link rel="stylesheet" href="style.css">

    <title>Thank you</title>
  </head>
  <body class="create">
    <?php echo $message1, $message2; ?>

  </body>
</html>

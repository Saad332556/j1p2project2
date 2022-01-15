<!DOCTYPE html>
<html>
<head>
    <!-- Meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="all">
    <meta name="language" content="Dutch">
    <meta name="author" content="Saad, Ahmed">
    <meta name="description" content="">
    <meta name="keywords" content="OptimalGaming, Events, Even, ICT">
    <meta name="copyright" content="copyright">

    <!-- CSS link -->
    <link rel="stylesheet" href="style.css">

    <!-- Hamburger link for small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Website titel -->
    <title>OptimalGaming</title>
</head>
<body>
    <div class="topnav">
        <img src="img/optimalgaming_logov2.png" class="responsive">
        <div class="topnav" id="myTopnav">
            <ul>
                <a href="#inleiding">Home</a>
                <a href="#overons">Over ons</a>
                <a href="#events">Evenementen</a>
                <a href="#inschrijven">Inschrijven</a>
                <a href="#contact">Contact</a>
                <a href="read.php">Aangemelden?</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i></a>
            </ul>
            
        </div>
    </div>
    <main>
        <section id="inleiding">
            <div class="div">
                <h1>Wil jij een event bijwonen én kans hebben om gave prijzen te winnen?</h1>
                <h2>Dan ben je bij ons op het juiste adres.</h2>
                <br>
                <p><b>Klik gauw op de knop hieronder om je in te schrijven voor<br>
                    1 van onze events en wie weet zien we je binnenkort!</b></p>
                <br>
                <button type="button" class="button1"><a href="#form"><span></span>INSCHRIJVEN</a></button>
            </div>
        </section>
        <section id="overons">
            <div class="overons container">
                <div class="overons-top">
                    <!--Titel Pagina-->
                    <h1 class="section-title">OVER ONS</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    At quam dolores eligendi qui doloremque nam animi distinctio delectus, 
                    obcaecati mollitia, nihil et sunt perferendis itaque. 
                    Tempora ab eos voluptates perferendis.</p>
                </div>
                <div class="overons-bottom">
                    <div class="overons-item">
                        <!--Icoontjes voor projecten-->
                        <div class="icon">
                        <img src="img/image.png" alt="">
                    </div>
                    <!--Projecten-->
                    <h2>Project1</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    At quam dolores eligendi qui doloremque nam animi distinctio delectus, 
                    obcaecati mollitia, nihil et sunt perferendis itaque. 
                    Tempora ab eos voluptates perferendis.</p>
                </div>
                <div class="overons-item">
                    <div class="icon">
                        <img src="img/image.png" alt="">
                    </div>
                    <h2>Project2</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    At quam dolores eligendi qui doloremque nam animi distinctio delectus, 
                    obcaecati mollitia, nihil et sunt perferendis itaque. 
                    Tempora ab eos voluptates perferendis.</p>
                </div>
                <div class="overons-item">
                    <div class="icon">
                        <img src="img/image.png" alt="">
                    </div>
                    <h2>Project3</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    At quam dolores eligendi qui doloremque nam animi distinctio delectus, 
                    obcaecati mollitia, nihil et sunt perferendis itaque. 
                    Tempora ab eos voluptates perferendis.</p>
                </div>
                <div class="overons-item">
                    <div class="icon">
                        <img src="img/image.png" alt="">
                    </div>
                    <h2>Project4</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    At quam dolores eligendi qui doloremque nam animi distinctio delectus, 
                    obcaecati mollitia, nihil et sunt perferendis itaque. 
                    Tempora ab eos voluptates perferendis.</p>
                </div>
            </div>
        </section>
        <section id="form">
            <h1 id="titel3">Inschrijven</h1>
            <div id="inschrijven">
                <div class="contact1">
                    <h3>
                        Wil jij graag bij een event van ons zijn?
                        Schrijf je dan zo snel mogelijk in via de formulier hieronder en 
                        wie weet zien we jou binnenkort bij één van onze evenementen!
                    </h3>
                </div>
                <div class="container">
                    <div class="row1">
                        <div class="column1">
                            <form action="create.php" method="post">
                                <div class="row">
                                    <div class="col-25">
                                        <label for="naam">Voornaam:</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="inputVnaam" name="vnaam" placeholder="Je naam.." required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="infix">Tussenvoegsel:</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="inputInfix" name="infix" placeholder="Je tussenvoegsel(s)..">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="achternaam">Achternaam:</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="inputAnaam" name="anaam" placeholder="Je achternaam.." required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="email">E-mail:</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="email" id="inputEmail" name="email" placeholder="Je emailadres.." required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="event">Evenement</label>
                                    </div>
                                    <div class="col-75">
                                        <select id="inputEvent" name="event"  required>
                                            <option value="" disabled selected>Kies een event</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="subject">Extra informatie?</label>
                                    </div>
                                    <div class="col-75">
                                        <textarea type="text" id="inputText" name="extra" placeholder="Voorbeeld: 'ik ben een rolstoel gebruiker' , 'ik gebruik een bepaalde medicatie voor .. ' , etc..." 
                                        style="height:150px"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                        <div class="column2" id="contact">
                            <p class="contact2">
                                Heb jij nog andere vragen of wil je liever met één van ons direct spreken of chatten? Klik dan op één van de onderstaande links.
                            </p>
                            <p class="contact3">
                                Openingstijden: 09:00 - 20:00<br>
                                Telefoon receptie: <a class="link" href="tel:0031302469241">030 - 24 69 241</a><br>
                                Email: <a class="link" href="mailto:info@optimalgaming.nl" target="_blank" rel="noopener">info@optimalgaming.nl</a>
                            </p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2451.5931112709663!2d5.158462715679926!3d52.08713647973455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c668a2918b16e9%3A0x95fac93d2c242c97!2sDaltonlaan%20300%2C%203584%20BK%20Utrecht!5e0!3m2!1snl!2snl!4v1635882379171!5m2!1snl!2snl" style="width: 100%; width: 480px; height: 300px; border:0; text-align: center;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<script src="nav.js"></script>
</body>
</html>
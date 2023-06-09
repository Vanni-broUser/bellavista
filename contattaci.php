<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Bellavista</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/dh-row-text-image-right-responsive.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top bg-white">
        <div class="container">
            <div><a class="navbar-brand" href="index.html"><img id="logo" src="assets/img/logo.jpg"><strong>Bellavista </strong>Pizzeria</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.html">Home&nbsp;</a></li>
                    <li class="nav-item"><a class="nav-link" href="storia.html">Storia&nbsp;</a></li>
                    <li class="nav-item"><a class="nav-link" href="servizi.html">Servizi&nbsp;</a></li>
                    <li class="nav-item"><a class="nav-link" href="obiettivi.html">Obiettivi</a></li>
                    <li class="nav-item"><a class="nav-link" href="contattaci.php">Contattaci</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="contact-clean">
        <form method="POST" action="#">
            <h2 class="text-center">Contattaci</h2>
            <div class="form-group"><input class="form-control" type="text" name="Nome" placeholder="Nome" required=""></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required=""></div>
            <div class="form-group"><textarea class="form-control" name="Messaggio" placeholder="Messaggio" rows="14" minlength="10"></textarea></div>
            <?php
                if($_POST) {
                    $nome = $_POST['Nome'];
                    $email = $_POST['email'];
                    $messaggio = $_POST['Messaggio'];
                    $to = "bellavista.pizzeriefranchising@gmail.com";
                    $subject = "Nuovo messaggio dal form di contatto del sito web";
                    $headers = "From: $email\r\nReply-To: $email\r\n";
                    $body = "Hai ricevuto un nuovo messaggio dal form di contatto del sito web:\n\n";
                    $body .= "Nome: " . $nome . "\n";
                    $body .= "Email: " . $email . "\n";
                    $body .= "Messaggio: " . $messaggio . "\n";
                    if(mail($to, $subject, $body, $headers)) {
                        echo "Grazie per averci contattato!";
                    } else {
                        echo "Si è verificato un errore nell'invio del messaggio. Riprova più tardi.";
                    }
                }
            ?>
            <div class="form-group"><button class="btn btn-primary" type="submit">INVIA<br></button></div>
            <div class="form-row">
                <div class="col-12">
                    <h2 class="h4" style="font-size: 28px;"><i class="fa fa-location-arrow"></i>&nbsp;Dove Trovarci</h2><iframe allowfullscreen="" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBNkX0CCsBaqPrSDhzzq3ByIcBuzt2GMX4&amp;q=Molfetta%2C+Via+Alessandro+Volta+49&amp;zoom=15" width="100%" height="400"></iframe>
                    <div class="form-row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <h2 class="h4" style="font-size: 22px;"><i class="fa fa-user"></i> Contatti</h2>
                            <div><span><strong>Telefono organizzazione eventi e Truck-Food</strong></span></div>
                            <div><span>3802490863</span></div>
                            <div><span><strong>Tefefono Franchising</strong></span></div>
                            <div><span>3892060125</span></div>
                            <div><span><strong>Telefono servizio a domicilio</strong></span></div>
                            <div><span>0808090193</span></div>
                            <hr class="d-sm-none d-md-block d-lg-none">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <h2 class="h4" style="font-size: 22px;"><i class="fa fa-location-arrow"></i>&nbsp;Vieni a Trovarci</h2>
                            <div><span><strong>Sede pilota</strong></span></div>
                            <div><span>Via Alessandro Volta, 49</span></div>
                            <div><span>Molfetta BA, 70056</span></div>
                            <hr class="d-sm-none">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <footer style="font-family: Times New Roman, Times, serif">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 footer-navigation">
                    <h3 style="font-family: Times New Roman, Times, serif"><a href="#">Bellavista Pizzeria</a></h3>
                    <p class="links"><a href="index.html">Home&nbsp;</a><strong> · </strong><a href="storia.html">Storia&nbsp;</a><strong> · </strong><a href="servizi.html">Servizi&nbsp;</a><strong> · </strong><a href="obiettivi.html">Obiettivi</a><strong>&nbsp;·&nbsp;</strong><a href="contattaci.php">Contattaci</a><br><strong> </strong></p>
                    <p class="company-name">Bellavista Pizzeria © 2021<br>p. IVA 07963100727</p>
                </div>
                <div class="col-sm-6 col-md-4 footer-contacts">
                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p><span class="new-line-span">Via Alessandro Volta 49</span> Italia, Molfetta</p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-left">+39 389 206 0125<br></p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-left">Servizio d'asporto e ordini a domicilio<br>+39 080 809 0193</p>
                    </div>
                    <div><i class="fa fa-envelope footer-contacts-icon"></i>
                        <p> <a href="mailto:bellavista.pizzeriefranchising@gmail.com" target="_blank" style="font-size: 14px;">bellavista.pizzeriefranchising@gmail.com</a></p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 footer-about">
                    <h4>About the company</h4>
                    <p>Il Brand BELLAVISTA trova le sue radici in una lunga e solida tradizione famigliare di Imprenditori, attenti alle esigenze e cambiamenti di più settori imprenditoriali.<br>La filosofia della società: la VITA come Impresa.</p>
                    <div class="social-links social-icons"><a href="https://www.facebook.com/Bellavista-Pizzerie-Franchising-257121178077380"><i class="fa fa-facebook"></i></a><a href="https://www.instagram.com/bellavista.pizzeriefranchising/"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>

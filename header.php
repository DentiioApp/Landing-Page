<?php
    $url = substr($_SERVER['REQUEST_URI'], -9);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    echo ($url=="-nous.php"?
            "<meta name=\"description\" content=\"La plateforme de partage de cas cliniques dentaires\">
            <title>Qui sommes-nous ?</title>"
                :
            "<meta name=\"description\" content=\"La plateforme de partage de cas cliniques dentaires\">
            <title>Dentiio </title>"
    );
    ?>

    <link rel="icon" type="image/png" href="img/logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="css/LandingPage.css">
    <link rel="stylesheet" href="css/bootstrap4/bootstrap.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.css">
    <link rel="stylesheet" href="css/list.css">
    <link rel="stylesheet" href="css/form-button.css">
    <!-- Font AWESOME -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <a class="navbar-brand align-logo" href="index.php">
            <img src="img/logoblue.png" alt="logo dentiio" class='logo pl-2'/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-center pl-md-5" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-item nav-link <?php echo ($url=="index.php"? "active" : "nav-hover" )?>" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link <?php echo ($url=="ncept.php"? "active" : "nav-hover" )?>" href="concept.php">Notre concept </a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link <?php echo ($url=="-nous.php"? "active" : "nav-hover" )?>" href="qui-sommes-nous.php">Qui sommes-nous ?</a>
                </li>
                <li>
                    <button data-toggle="modal" data-target="#modalhome" class="btn btn-primary mx-3">Tester Dentiio</button>
                </li>
                <li class="nav-item">
                    <a href="en/index.php" class="nav-item nav-link">
                        <img src="img/flag/uk.png" alt="united kingdom flag"  width="15px" height="auto" />
                    </a>
                </li>
                <li class="nav-item">
                <a href="sp/index.php" class="nav-item nav-link">
                        <img src="img/flag/es.png" alt="spain flag"  width="15px" height="auto" />
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="modal fade" id="modalhome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Transmettez-nous vos informations !</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="mailto:contact@dentiio.com" enctype="text/plain" ><!-- class="myform" -->
                <div class="modal-body">
                    <p class="">Notre équipe sera ravie d’échanger avec vous pour vous faire tester l'application Dentiio</p>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Prénom* :</label>
                                    <input type="text" class="form-control" id="recipient-name" name="prenom" placeholder="Votre prénom..." required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nom* :</label>
                                    <input type="text" class="form-control" id="recipient-name" name="nom" placeholder="Votre nom..." required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Mail* :</label>
                                    <input type="email" class="form-control" id="recipient-name" name="mail" placeholder="Votre mail..." required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Téléphone :</label>
                                    <input type="tel" class="form-control" id="recipient-name" name="tel" placeholder="Votre téléphone..." >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="recipient-name" class="col-form-label">Je suis* :</label>
                                <select class="form-control" name="profession">
                                    <option>Chirurgien-dentiste</option>
                                    <option>Etudiant</option>
                                    <option>Autre</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="submit" id="submiy" value="Envoyer" class="btn btn-primary">
                    <span class="output_message"></span>
                </div>
            </form>

        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.myform').on('submit',function(){
            var form = $(this);
            $.ajax({
                url: "sendMail.php",
                method: form.attr('method'),
                data: form.serialize(),
                success: function(){
                    $('#submiy').replaceWith( "<button class='btn btn-success'>Demande envoyée</button>" )

                }
            });
            return false;
        });
    });

</script>
<div class='app'>
<?php include_once "cookies.php" ?>

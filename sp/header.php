<?php
    $url = substr($_SERVER['REQUEST_URI'], -9);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    echo ($url=="somos.php"?
            "<meta name=\"description\" content=\"La plateforme dédiée au partage de connaissances bucco-dentaires\">
            <title>Who we are ?</title>"
                :
            "<meta name=\"description\" content=\"La plateforme dédiée au partage de connaissances bucco-dentaires\">
            <title>Dentiio - La référence en diagnostic dentaire</title>"
    );
    ?>

    <link rel="icon" type="image/png" href="../img/logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/LandingPage.css">
    <link rel="stylesheet" href="../css/bootstrap4/bootstrap.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="../css/mdb.css">
    <link rel="stylesheet" href="../css/list.css">
    <link rel="stylesheet" href="../css/form-button.css">
    <!-- Font AWESOME -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <a class="navbar-brand align-logo" href="../index.php">
            <img src="../img/logoblue.png" alt="logo dentiio" class='logo pl-2'/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-center pl-md-5" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-item nav-link <?php echo ($url=="index.php"? "active" : "nav-hover" )?>" href="index.php">Case <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link <?php echo ($url=="somos.php"? "active" : "nav-hover" )?>" href="quienes-somos.php">Quiénes somos ?</a>
                </li>
                <li class="nav-item">
                    <a href="../en/index.php" class="nav-item nav-link">
                        <img src="../img/flag/uk.png" alt="united kingdom flag" width="15px" height="auto" />
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../index.php" class="nav-item nav-link">
                        <img src="../img/flag/fr.png" alt="french flag" width="15px" height="auto" />
                    </a>
                </li>
            </ul>
            <span>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfS_jq9N_vC1eYy48ZX8I3hqyO7R4be91k5Vi_2BUymXkM-eg/viewform?usp=sf_link" target='_blank' rel="noopener noreferrer" class="nav-item button buttonhome border-0"><span class="gradient"></span>Answer the questionnaire</a>
            </span>
        </div>
    </nav>
</header>
<div class='app'>
<?php include_once "cookies.php" ?>


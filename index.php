<!DOCTYPE HTML>
<html>
<head>
    <?php include_once "locale/fr.php" ?>
    <meta charset="utf-8">
    <title>SymerWeb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SymerWeb est une jeune entreprise québécoise spécialisée au développement d'un site Web pour vous et votre entrprise.">
    <meta name="revisit-after" content="1 days">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Simon Mercier">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <link href='http://fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">
</head>

<body>

<header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-inner">
                <img src="img/logoBrand.png" alt="Logo" class="navbar-text img-responsive pull-left"/>
<!--                <a href="#"><p id="language" class="navbar-text pull-right">English</p></a>-->
            </div>
        </div>
    </nav>
</header>

<section id="pres" class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo $locale['TXT_TITLE'] ?></h1>
            <hr/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="lead"><?php echo $locale['TXT_DESC'] ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <h2><i class="fa fa-angle-right"></i><?php echo $locale['TXT_SUB1'] ?></h2>
            <p><?php echo $locale['TXT_DESC1'] ?></p>
        </div>
        <div class="col-md-4 col-sm-12">
            <h2><i class="fa fa-angle-right"></i><?php echo $locale['TXT_SUB2'] ?></h2>
            <p><?php echo $locale['TXT_DESC2'] ?></p>
        </div>
        <div class="col-md-4 col-sm-12">
            <h2><i class="fa fa-angle-right"></i><?php echo $locale['TXT_SUB3'] ?></h2>
            <p><?php echo $locale['TXT_DESC3'] ?></p>
        </div>
    </div>
</section>

<section id="projects" class="container">
    <div class="row">
        <div class="col-md-12">
            <hr/>
            <h1>Projets</h1>
            <hr/>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-4 col-xs-12 col-sm-12 project">
            <h2 style="background-color: #ffa100">Liquidation 125 Plus</h2>
            <img src="img/liquidation.jpg" alt="Liquidation 125 Plus" class="img-responsive" style="height: 340px;"/>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-12 project">
            <h2 style="background-color: #ffa100">Patrimoine Bécancour</h2>
            <img src="img/becancour.jpg" alt="Société du Patrimoine de Bécancour" class="img-responsive" style="height: 340px;"/>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-12">
            <h2 style="background-color: #ffa100">Et vous ?</h2>
        </div>
    </div>
</section>

<section class="container" id="contact">
    <div class="row">
        <div class="col-md-12">
            <hr/>
            <h1>Contact</h1>
            <hr/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <address>
                        <strong class="text-muted">SymerWeb Enr.</strong><br>
                        <i class="fa fa-user fa-fw"></i>&nbsp;Simon Mercier<br>
                        <i class="fa fa-road fa-fw"></i>&nbsp;9120 rue Berri<br>
                        <i class="fa fa-building-o fa-fw"></i>&nbsp;Montréal<br>
                        <i class="fa fa-phone fa-fw"></i>&nbsp;450 760-1498<br>
                        <i class="fa fa-envelope-o fa-fw"></i><a href="mailto:contact@symerweb.com">&nbsp;contact@symerweb.com</a>
                    </address>
                </div>
                <div class="col-md-6 col-sm-12">
                    <img src="img/logoBig.png" alt="Logo" class="img-responsive pull-right"/>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>

</html>

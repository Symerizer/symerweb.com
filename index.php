<!DOCTYPE HTML>
<html>
<head>
    <?php include_once "locale/fr.php" ?>
    <meta charset="utf-8">
    <title>SymerWeb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SymerWeb est une jeune entreprise québécoise spécialisée au développement d'un site Web pour vous et votre entrprise.">
    <meta name="revisit-after" content="30 days">
    <meta name="distribution" content="web">
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
        <div class="col-md-4 col-xs-6 col-sm-6 project">
            <h2>Liquidation 125 Plus</h2>
            <img src="http://placehold.it/360x376" alt="Liquidation 125 Plus" class="img-responsive"/>
        </div>
        <div class="col-md-4 col-xs-6 col-sm-6 project">
            <h2>Patrimoine Bécancour</h2>
            <img src="http://placehold.it/360x376" alt="Société du Patrimoine de Bécancour" class="img-responsive"/>
        </div>
        <div class="col-md-4 col-xs-6 col-sm-6 project">
            <h2>Et vous ?</h2>
            <img src="http://placehold.it/360x376" alt="Serez-vous le prochain ?" class="img-responsive"/>
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
        <div class="col-md-6">
            <img src="img/logoBig.png" alt="Logo" class="img-responsive pull-left"/>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <address>
                        <br/>
                        <strong class="text-muted">SymerWeb Enr.</strong><br>
                        <i class="fa fa-user fa-fw"></i>&nbsp;Simon Mercier<br>
                        <i class="fa fa-road fa-fw"></i>&nbsp;3273 rue Papineau<br>
                        <i class="fa fa-building-o fa-fw"></i>&nbsp;Trois-Rivières (Québec)<br>
                        <i class="fa fa-envelope fa-fw"></i>&nbsp;G8Z 1P6<br/>
                        <i class="fa fa-phone fa-fw"></i>&nbsp;450 760-1498<br>
                    </address>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="alert text-center"></div>
            <form role="form" id="email">
                <div class="form-group">
                    <label class="control-label" for="address">Votre adresse email</label>
                    <input type="text" name="address" id="address" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label" for="subject">Sujet</label>
                    <input type="text" name="subject" id="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label" for="body">Message</label>
                    <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" class="btn btn-primary btn-block" value="Soumettre">
            </form>
        </div>
    </div>
</section>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>

</html>

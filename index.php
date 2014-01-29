<!DOCTYPE HTML>
<html>
<head>
    <?php include_once "locale/fr.php" ?>
    <meta charset="utf-8">
    <title>SymerWeb</title>
    <link rel="stylesheet" type="text/less" href="less/bootstrap.less"/>
    <link href='http://fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
</head>

<body>

<header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-inner">
            <img src="img/logoBrand.png" alt="Logo" class="navbar-text img-responsive pull-left"/>
            <a href="#"><p id="language" class="navbar-text pull-right">English</p></a>
        </div>
    </nav>
</header>

<section id="pres" class="container">
    <div class="row">
        <div class="col-lg-12">
            <hr/>
            <h1><?php echo $locale['TXT_TITLE'] ?></h1>
            <hr/>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <p class="lead"><?php echo $locale['TXT_DESC'] ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <h2><i class="fa fa-angle-right"></i> Lorem</h2>
            <p>Sanctus sea sed takimata ut vero voluptua. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
        <div class="col-lg-4">
            <h2><i class="fa fa-angle-right"></i> Ipsum</h2>
            <p>Sanctus sea sed takimata ut vero voluptua. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
        <div class="col-lg-4">
            <h2><i class="fa fa-angle-right"></i> Dolor</h2>
            <p>Sanctus sea sed takimata ut vero voluptua. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
    </div>
</section>

<section id="projects" class="container">
    <div class="row">
        <div class="col-lg-12">
            <hr/>
            <h1>Projets</h1>
            <hr/>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-lg-4">
            <h2>Liquidation 125 Plus</h2>
            <img src="http://placehold.it/360x300" alt="Liquidation 125 Plus"/>
        </div>
        <div class="col-lg-4">
            <h2>Patrimoine Bécancour</h2>
            <img src="http://placehold.it/360x300" alt="Société du Patrimoine de Bécancour"/>
        </div>
        <div class="col-lg-4">
            <h2>Et vous ?</h2>
            <img src="http://placehold.it/360x300" alt="Serez-vous le prochain ?"/>
        </div>
    </div>
</section>

<section class="container" id="contact">
    <div class="row">
        <div class="col-lg-12">
            <hr/>
            <h1>Contact</h1>
            <hr/>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <img src="img/logoBig.png" alt="Logo" class="img-responsive pull-left"/>
            <address>
                <strong class="text-muted">SymerWeb Enr.</strong><br>
                3273 rue Papineau<br>
                Trois-Rivières<br>
                <abbr title="Téléphone">T:</abbr> (450) 760-1498
            </address>
        </div>
        <div class="col-lg-6">
            <p class="lead">Pour me contacter facilement, simplement m'envoyer un email et je répondrai dans les plus brefs délais.</p>
            <form role="form">
                <div class="form-group">
                    <label for="email">Votre adresse email</label>
                    <input type="email" id="email" class="form-control" placeholder="Votre adresse email">
                </div>
                <div class="form-group">
                    <label for="subject">Sujet</label>
                    <input type="text" id="subject" class="form-control" placeholder="Sujet">
                </div>
                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
                </div>
            </form>
        </div>
    </div>
</section>



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/less.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

</body>

</html>

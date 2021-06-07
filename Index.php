<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Site meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Filelec</title>
    <!-- CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php include("./assets/includes/menu.php") ?>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">VENTE D'ACCESOIRES AUTOMOBILES</h1>
        <p class="lead text-muted mb-0">
            Les accessoires auto vous rendent la vie plus facile. Certains
            d'entre eux sont obligatoires, d'autres rendent les longs trajets plus agréables. Il y a des
            accessoires et et d'équipements auto pratiques pour le transport de bagages supplémentaires,
            d'animaux ou d'enfants, ainsi que pour aider la conduite sous les intempéries et lors de fortes
            pollutions. Quelque soit la situation, nous avons les accessoires adéquats.</p>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./assets/img/equipements-son.png" alt="First slide">

                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/img/equipements_toit.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/img/equipements_illustration.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
</div>


<div class="container mt-3">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header bg-primary text-white text-uppercase">
                    <i class="fa fa-star">Les derniers produits</i>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php include("./assets/includes/articles_last.php") ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include("./assets/includes/footer.php") ?>

<!-- JS -->
<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" type="text/javascript"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>

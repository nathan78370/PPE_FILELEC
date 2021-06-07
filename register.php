<?php include("./assets/includes/registerc.php") ?>
<!DOCYTPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Filelec</title>
    <!-- CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/my-login.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include("./assets/includes/menu.php") ?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">S'inscrire</h5>
                    <label class="custom-control-label" for="customCheck1">Déja un compte ?</label>
                    <a href="./login.php">Se connecter</a>
                    <form class="fo" method="post" action="">

                        <div class="form-label-group">
                            <input type="text" name="prenom" value="<?php echo $prenom?>" id="inputPrenom" class="form-control" placeholder="Prénom" required autofocus>
                            <label for="inputPrenom">Prénom</label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" name="nom" value="<?php echo $nom?>" id="inputNom" class="form-control" placeholder="Nom" required>
                            <label for="inputNom">Nom</label>
                        </div>

                        <div class="form-label-group">
                            <input type="email" name="email" value="<?php echo $email?>" id="inputEmail" class="form-control" placeholder="Email" required>
                            <label for="inputEmail">Email</label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" name="telephone" value="<?php echo $telephone?>" id="inputPhone" class="form-control" placeholder="Téléphone" required>
                            <label for="inputPhone">Téléphone</label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" name="Ville" value="<?php echo $Ville?>" id="inputVille" class="form-control" placeholder="Ville" required>
                            <label for="inputVille">Ville</label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" name="CodePOSTAL" value="<?php echo $CodePOSTAL?>" id="inputCP" class="form-control" placeholder="Code Postal" required>
                            <label for="inputCP">Code Postal</label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" name="adresse" value="<?php echo $adresse?>" id="inputAdresse" class="form-control" placeholder="Adresse" required>
                            <label for="inputAdresse">Adresse</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mot de Passe" required>
                            <label for="inputPassword">Mot de Passe</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" name="repassword" id="inputrePassword" class="form-control" placeholder="Confirmation du mot de passe" required>
                            <label for="inputrePassword">Confirmation du mot de passe</label>
                        </div>

                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="valider">Sign in</button>
                        <hr class="my-4">
                    </form>
                    <?php if(!empty($message)){ ?>
                        <div id="message"><?php echo $message ?></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <?php include("./assets/includes/footer.php") ?>
</footer>
</body>
</html>
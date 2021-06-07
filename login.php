<?php include("./assets/includes/loginc.php") ?>

<!DOCYTPE html>
<html>
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
<body onLoad="document.fo.login.focus()">

<header>
<?php include("./assets/includes/menu.php") ?>
</header>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Sign In</h5>
                    <label class="custom-control-label" for="customCheck1">Pas Encore de compte ?</label>
                    <a href="register.php">S'inscrire</a>
                    <form class="fo" method="post" action="">
                        <div class="form-label-group">
                            <input type="email" name="email" value="<?php echo $email?>" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                            <label for="inputEmail">Email address</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            <label for="inputPassword">Password</label>
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
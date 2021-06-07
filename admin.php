<?php
session_start();
if(@$_SESSION["autoriser"]!="oui"){
    header("location:login.php");
    exit();
}
?>
<?php include("./assets/includes/adminc.php") ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Free Bootstrap 4 Ecommerce Template</title>
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
        <h1 class="jumbotron-heading">AJOUT DE PRODUIT</h1>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Produit
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Titre Produit</label>
                            <input type="text" name="libelle" value="<?php echo $libelle?>" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Nom du Produit" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Description</label>
                            <input type="text" name="description" value="<?php echo $description?>" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Description produit" required>
                            <small id="emailHelp" class="form-text text-muted">Une Petite Description</small>
                        </div>
                        <!--<div class="form-group">
                            <label for="message">Description Détaillé</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                            </div>
                        </div>-->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">€</span>
                            </div>
                            <input type="text" name="price" value="<?php echo $price?>" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" name="valider" class="btn btn-primary text-right">Submit</button></div>
                    </form>
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

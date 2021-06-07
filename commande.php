<?php
session_start();
if(@$_SESSION["autoriser"]!="oui"){
    header("location:login.php");
    exit();
}
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

<hr>
<div class="container bootstrap snippet">
    <div class="row">

        <div class="col-sm-10">
            <h1>
                <?php
                echo (date("H")<18)?("Bonjour"):("Bonsoir");
                ?>
                <span>
                    <?=$_SESSION["nomPrenom"]?>
                </span>
            </h1>
        </div>
        <div class="col-sm-2"><a href="#" class="pull-right"></a></div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->

            <ul class="list-group">
                <li class="list-group-item text-muted">Votre Compte</li>
                <li class="list-group-item text-muted"><a data-toggle="tab" href ="profil.php">Profil</a></li>
                <li class="list-group-item text-muted"><a data-toggle="tab" href ="commande.php">Commandes</a></li>
            </ul>

        </div><!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href ="#"></a></li>
            </ul>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> N° Commandes </th>
                                    <th> Produit </th>
                                    <th> Date d'Achat </th>
                                    <th> Montant </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 1 </td>
                                    <td>
                                        Lampe x1 <br>
                                        Clé x2</td>
                                    <td> 01/04/2021 </td>
                                    <td> 135,56 € </td>
                                </tr>
                                <tr>
                                    <td> 1 </td>
                                    <td>
                                        Radio x1 <br>
                                        Prise 12v x2 <br>
                                        Volant x1 </td>
                                    <td> 15/12/2020 </td>
                                    <td> Default </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!--/tab-pane-->
        </div><!--/tab-content-->
    </div><!--/col-9-->
</div>
<?php include("./assets/includes/footer.php") ?><!--/row-->
</body>

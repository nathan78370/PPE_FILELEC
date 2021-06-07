<?php 
ob_start();
include("EnTete/enteteHautCo.php");

include ("Controlleur/controlleur.class.php");
$unControlleur = new Controlleur("localhost", "Filelec", "root", "");
$unControlleur -> setTable("ligneCommande");
$resultat = $unControlleur -> selectStats($_SESSION['idC']);

$unControlleur2 = new Controlleur("localhost", "Filelec", "root", "");
$unControlleur2 -> setTable("commande");
$resultat2 = $unControlleur -> selectStats2($_SESSION['idC']);

$_SESSION["NbArticleEnCours"] = 0;
if (!isset($_SESSION["idC"]))
{
    header("Location: vueAccueil.php");
}
?>

    <!-- DEBUT -->
    <div class="wrapper row1">
      <header id="header" class="hoc clear"> 
        
        <div id="logo" class="fl_left">
          <h1><a href="index.php">FILELEC</a></h1>
        </div>
        <nav id="mainav" class="fl_right" style="font-size: 15px">
          <ul class="clear">
            <li><a href="indexCo.php?page=3>">Accueil</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Achats
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="indexCo.php?page=4.1"><img src="Images/achat/TOKAI_LAR-15B.jpg" style="width: 26px; height: 15px;" />Autaradios</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="indexCo.php?page=4.2"><img src="Images/achat/MAPPY_ULTI_E538.jpg" style="width: 26px; height: 15px;" />GPS</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="indexCo.php?page=4.3"><img src="Images/achat/CAMERA_DE_RECUL_BEEPER_RWEC100X-RF.jpg" style="width: 26px; height: 15px;" />Aide à </br>la conduite</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="indexCo.php?page=4.4"><img src="Images/achat/PIONEER_Ts-13020_I.jpg" style="width: 26px; height: 15px;" />Haut-Parleurs</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="indexCo.php?page=4.5"><img src="Images/achat/SUPERTOOTH_BUDDY_NOIR.jpg" style="width: 26px; height: 15px;" />Kit mains-libre</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="indexCo.php?page=4.6"><img src="Images/achat/MTX_RFL4001D.jpg" style="width: 26px; height: 15px;" />Amplificateur</a>
              </div>
            </li>
            <li><a href="indexCo.php?page=5">Panier</a></li>
            <li><a href="indexCo.php?page=6.1">Suivie de commande</a></li>
            <li><a href="indexCo.php?page=1.2">A propos</a></li>
            <li><a href="indexCo.php?page=2.2">FAQ</a></li>
          </ul>
        </nav>
        
      </header>
    </div>
    
    <div id="pageintro" class="hoc clear"> 
      
      <div class="flexslider basicslider">
        <ul class="slides">
          <li>
            <article>
              <h3 class="heading">Profité de la nouvelle technologie</h3>
              <p>Vente aux profesionnelles et particuliers</p>
            </article>
          </li>
        </ul>
      </div>
      
    </div>
    
    <!-- END -->

<div class="card-group p-5">
  <div class="card p-5 border-0">
    <img class="card-img-top mx-auto d-block" src="Images/accueil/icon_1.png" alt="Card image cap" style="width: 25%">
    <div class="card-body text-center">
      <h5 class="card-title">C'est parti</h5>
      <p class="card-text">Commander votre produit, on développe le reste</p>
    </div>
  </div>
  <div class="card p-5 border-0">
    <img class="card-img-top mx-auto d-block" src="Images/accueil/icon_2.png" alt="Card image cap" style="width: 25%">
    <div class="card-body text-center">
      <h5 class="card-title">Espace client et suivi</h5>
      <p class="card-text">Un espace client, des outils innovants et un conseiller personnel</p>
    </div>
  </div>
  <div class="card p-5 border-0">
    <img class="card-img-top mx-auto d-block" src="Images/accueil/icon_3.png" alt="Card image cap" style="width: 25%">
    <div class="card-body text-center">
      <h5 class="card-title">Résultat</h5>
      <p class="card-text">Profitez de nos services avec une qualité assurée</p>
    </div>
  </div>
</div>

<center style="color: black;">

<div class="card" style="width: 600px;">
  <div class="card-header">
    Statistique
  </div>
</div>
<table class="table" style="width: 600px;">
  <thead class="thead-light">
    <tr>
    <?php
        foreach ($resultat as $unResultat) 
        {
	   ?>
  <tbody>
    <tr>
      <th scope="row"><?= "Nombre de ".$unResultat['NomE']. " acheté : " ?></th>
    </tr>

    <tr>
	  <td scope="col"><?= $unResultat['Quantite'] ?></td>
	</tr>
	<?php
        }
    ?>
    </tr>
  </tbody>
</table>

<table class="table" style="width: 600px;">
  <thead class="thead-light">
    <tr>
          <th scope="col">Le nombre de commande</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $SumQuantite = 0;
        foreach ($resultat2 as $unResultat2) 
        {
          $SumQuantite = $unResultat2['Quantite2'];
 
        }
    ?>
          <tr>
            <td><?= $SumQuantite ?></td>
          </tr>

  </tbody>
</table>
</center>

<?php 
include("EnTete/enteteBas.php"); 
  ob_end_flush();
?>
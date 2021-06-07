<?php
ob_start();
include ("Controlleur/controlleur.class.php");

include("EnTete/enteteHautCo.php");
$unControlleur = new Controlleur("localhost", "Filelec", "root", "");
if (isset($_POST["deco"])) 
{
	session_destroy();
    session_start();
}
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
<br>
<br>
<?php

$_SESSION['prixGlobal'] = 0;


if($_SESSION["NbArticleEnCours"] > 0)
{
	//Creation tableau pour panier
	echo "<div id='tableau_panier' style='color:black'>";
	echo "<center style='color: black;''>";
	echo "<h3 colspan='4'>Votre panier</h3>";
	echo "<table style='width: 1000px;'>";
	echo "<tr>";
	echo "<th class=\"tabPanierT\"> </th>";
	echo "<th class=\"tabPanierT\">Libellé </ th>";
	echo "<th class=\"tabPanierT\">Description </ th>";
	echo "<th class=\"tabPanierT\">Quantité </th>";
	echo "<th class=\"tabPanierT\">Prix Unitaire </th>";
	echo "<th class=\"tabPanierT\"> </th>";
	echo "</tr>";
	echo "<br>";
	// Insertion du panier dans le tableau
	for($i=0; $i<$_SESSION["NbArticleEnCours"]; $i++)
	{		
		echo "<form method = 'post' action = '' style='width: 600px;'>";
		echo "<tr style='width: 600px;'>";
		echo "<td class=\"tabPanier\" style='width: 600px;'><img src=".$_SESSION["panier"][$i]["Image"]." style='width:100%;'> </td>";  //Image produit
		echo "<td class=\"tabPanier\" style='width: 600px;'>".$_SESSION["panier"][$i]["NomE"]." </ td>"; //Libellé produit
		echo "<td class=\"tabPanier\" style='width: 600px;'>".$_SESSION["panier"][$i]["Descr"]." </ td>"; //Description produit
		echo "<td class=\"tabPanier\" style='width: 600px;'><input class=\"moins\" type=\"submit\" name=\"moins\" value=\"Moins".$i."\"/> <input type=\"text\" disabled=\"disabled\" size=\"4\" name=\"qteProduit\" value=\"".$_SESSION["panier"][$i]["QteC"]."\"/> <input class=\"plus\" type=\"submit\" name=\"plus\" value=\"Plus".$i."\"/></td>";  //Qte produit
		echo "<td class=\"tabPanier\" style='width: 600px;'>".$_SESSION["panier"][$i]["Prix"]." € </td>";  //Prix unitaire produit
		echo "<td class=\"tabPanier\" style='width: 600px;'><input class=\"panier\" type=\"submit\" name=\"suppression\" value=\"Supprimer".$i."\"/></td>";  //Suppression produit//Rafraichossement produit
		echo "</tr>";
		$ligne = $i;
	}
	for($i=0; $i<$_SESSION["NbArticleEnCours"]; $i++)
	{
		$_SESSION['prixGlobal']=$_SESSION["panier"][$i]["Prix"]*$_SESSION["panier"][$i]["QteC"]+$_SESSION['prixGlobal'];  //Calcul prix global
	}

	echo "<br>";
	echo "</table>";
	echo "<tr>";
	echo "<td class=\"tabPGlob\">Prix Global - sans livraison - : ".$_SESSION['prixGlobal']." €</td>";  // Affichage prix global
	echo "</tr>";
	echo "<tr>";
	echo "<br>";
	echo "<tr>";
	echo "<a href='#payer_fin' style='color:black'><td class=\"tabPGlob\"> <input type=\"submit\" name=\"payer\" value=\"Payer\"/> </td></a>";  // Boutton payer
	echo "</tr>";
	echo "<tr>";
	
	echo "</tr>";
	echo "</form>";
	echo "</div>";
	echo "<br>";

 	// Gestion bouton "suppression" par rapport à une ligne du panier
    if(isset($_POST['suppression']))
    {
    	$NumSupp=substr($_POST['suppression'],9);
    	$idESelect = $_SESSION["panier"][$NumSupp]["idE"];
    	$QteEff = $_SESSION["panier"][$NumSupp]["QteC"];
    	$unControlleur -> RajoutQuandSupprimerPanierC($idESelect,$QteEff);	// Rajout des quantitté suprimé du panier dans la BDD
    	unset($_SESSION["panier"][$NumSupp]);  // Suppression des données de la ligne voulue
    	$_SESSION["panier"] =  array_values($_SESSION["panier"]); // Réagensement des lignes du panier
    	$_SESSION["NbArticleEnCours"] = $_SESSION["NbArticleEnCours"] - 1;	

    	sleep(0.5);
    	header("Location: vuePanier.php");
    }  

	// Gestion bouton "moins" et "plus" par rapport à une ligne du panier
    if(isset($_POST['moins']))
    {
    	$NumMoins=substr($_POST['moins'],5);

    	if ($_SESSION["panier"][$NumMoins]["QteC"] > 1)
    	{
	    	$_SESSION["panier"][$NumMoins]["QteC"] -=1;	
	    	$idESelect = $_SESSION["panier"][$NumMoins]["idE"];
    		$QteEff = $_SESSION["panier"][$NumMoins]["QteC"];
	    	$unControlleur -> RajoutQuandDiminutionQteEquipPanier($idESelect,$QteEff);	
    	}else{
    		$_SESSION["panier"][$NumMoins]["QteC"] = 1;	
    	}
	    sleep(0.5);
	    header("Location: vuePanier.php");
    }   
    if(isset($_POST['plus']))
    {
    	$NumPlus=substr($_POST['plus'],4);

    	$idESelect = $_SESSION["panier"][$NumPlus]["idE"];
    	$unControlleur -> selectQteELigneSelect($idESelect);	

    	if ($_SESSION["panier"][$NumPlus]["QteC"] < $_SESSION['QteEBDD'])
    	{
	    	$_SESSION["panier"][$NumPlus]["QteC"] +=1;	
	    	$idESelect = $_SESSION["panier"][$NumPlus]["idE"];
    		$QteEff = $_SESSION["panier"][$NumPlus]["QteC"];
	    	$unControlleur -> RettirerQuandAugmentationQteEquipPanier($idESelect,$QteEff);
    	}
	    sleep(0.5);
	   	header("Location: vuePanier.php");
    } 
    
    // Gestion du boutton "payer"
    if(isset($_POST['payer']))
    { 
    	$NbArticle = $_SESSION["NbArticleEnCours"];
    	$NbArticleBis = $_SESSION["NbArticleEnCours"] -1;
    	 // Choix date de livraison
			// Definition des variables
			$nT = $_SESSION["NbArticleEnCours"];
			$cT = 1;
			$var = round(($nT/3), 0, PHP_ROUND_HALF_DOWN);
			$var2 = $nT/3;

			$_SESSION['datev1'] = date("Y-m-d", mktime(0, 0, 0, date("m")  , date("d")+2, date("Y")));
			$_SESSION['datev2'] = date("Y-m-d", mktime(0, 0, 0, date("m")  , date("d")+10, date("Y")));

			// Permet de savoir dans quel paquet de transport pour 3 articles on es
			if ($nT <= 3)
			{
				$ct = 1;
			}elseif ($var = $var2) {
				$cT = round($var2, 0, PHP_ROUND_HALF_DOWN) + 1;
			}

			for ($k=1; $k<=$cT; $k++)  // Choix de la date avec le prix augmentant suivant le nombre de paquet de transport pour 3 articles
			{
				if ($k == $cT)
				{
					$_SESSION['var3'] = $cT*7.5;
					echo "<center>";
					echo "<div id='payer_fin' style='color:black'>";
					echo "<p style='color:red'>Vous devez sélectionner une date pour finaliser vôtre achat ! </p>";
					echo "<form method = 'post' action = ''>
							<select name='date'>
					  			<option value=".$_SESSION['datev1']."> ".$_SESSION['datev1'].". En 2 jours ouvré, PAYANT de : ".$_SESSION['var3']." € </option>
					  			<option value=".$_SESSION['datev2']."> ".$_SESSION['datev2'].". En 10 jours ouvré, GRATUIT</option>
							</select> 
							<input type='submit' name='finaliser' value='Finaliser'/>
					</form>";
					echo "</div>";
					echo "</center>";
					echo "<br>";
				}
			}	
	}	
}
else
{
?>
	<form method = 'post' action = ''>
	<div class="card text-center" style="color: black;">
	  <div class="card-body">
	    <h5 class="card-title">Votre panier est vide !</h5>
	    <p class="card-text">Ajouter un Article ?</p>
	    <input type='submit' name='ajouter' value='Ajouter' class="btn btn-primary">
	  </div>
	</div>
	</form>
<?php
}

// Gestion du bouton "ajouter" pour aller sur la page d'achat
if(isset($_POST['ajouter']))
{
  	header("Location: vueAchat.php");
}

// Mise en BDD
if( isset($_POST['finaliser']) ) 
{

	// Insertion de la DHC (date/heure d'insertion dans la bdd )+ DLS (date de livraison souhaiter) + Etat 'en cours de preparation' + idClient
	$tabComm['DHC'] = date("Y-m-d H:i:s");
	if($_POST['date'] == $_SESSION['datev1'])
	{
		$_SESSION['prixGlobalAvecFrais'] = $_SESSION['prixGlobal'] + $_SESSION['var3'];

		$tabComm['DLS'] = $_SESSION['datev1'];
	}
	if($_POST['date'] == $_SESSION['datev2'] ){
		$_SESSION['prixGlobalAvecFrais'] = $_SESSION['prixGlobal'];
		$tabComm['DLS'] = $_SESSION['datev2'];
	} 
	$tabComm['Etat'] = "en cours de preparation";
	$tabComm['PrixSansLivraison'] = $_SESSION['prixGlobal'];
	if($_POST['date'] == $_SESSION['datev1'])
	{
		$tabComm['FraisLivraison'] = $_SESSION['var3'];
	}
	if( $_POST['date'] == $_SESSION['datev2'] ){
		$tabComm['FraisLivraison'] = 0;
	}   
	
	$tabComm['PrixAvecLivraison'] = $_SESSION['prixGlobalAvecFrais'];  
	$tabComm['idC'] = $_SESSION['idC'];						
	$unControlleur -> setTable('commande');
	$unControlleur -> insert($tabComm);
	$unControlleur -> selectDerniereCommande();

	// Insertion de numC (numéro de commande crée juste avant) + idE () + Image  + NomE + Descr + QteE
	for ($i=0; $i<$_SESSION["NbArticleEnCours"]; $i++)
	{
		$tabLiComm['numC'] = $_SESSION['numC'];
		$tabLiComm['idE'] = $_SESSION["panier"][$i]["idE"];
		$tabLiComm['Image'] = $_SESSION["panier"][$i]["Image"];
		$tabLiComm['NomE'] = $_SESSION["panier"][$i]["NomE"];
		$tabLiComm['Descr'] = $_SESSION["panier"][$i]["Descr"];	
		$tabLiComm['QteE'] = $_SESSION["panier"][$i]["QteC"];							
		$unControlleur -> setTable('ligneCommande');
		$resultat = $unControlleur -> insert($tabLiComm);
		
		header("Location: vueSuivie.php");
	}
	$_SESSION["NbArticleEnCours"] = 0;

	// Inseetion de la facture suite à la validation d'une commande
	$tabFac['DHF'] = date("Y-m-d H:i:s");
	$tabFac['idC'] = $_SESSION['idC'];

	$unControlleur -> setTable('facture');
	$resultat = $unControlleur -> insert($tabFac);
}

echo "</center>";
ob_end_flush();
 
include("EnTete/enteteBas.php"); 
?>


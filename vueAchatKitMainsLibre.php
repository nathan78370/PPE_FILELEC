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
    
    $_SESSION['alreadyinpanier'] = false;	
	if(isset($_POST['Acheter']))
	{
		$nbarticle = $_SESSION["NbArticleEnCours"];
		$unControlleur -> setTable('equipement');
	    $champs = array(' * ');
	    $where = array('idE'=>$_POST['idE']);
	    $operateur = "";
	    $panier = $unControlleur -> selectWhere($champs, $where, $operateur);
	    foreach ($panier as $unPanier) 
	    {
	       	$_SESSION['idE'] = $_POST['idE'];
			$_SESSION['libelleProduit'] = $unPanier['NomE'];
			$_SESSION['descriptionProduit'] = $unPanier['Descr'];
			$_SESSION['qteProduit'] = $_POST['QteE'];
			$_SESSION['prixProduit'] = $unPanier['Prix'];
			$_SESSION['image'] = $unPanier['Image'];
	    }

		$QteE=$_POST['QteE'];

		for($i = 0; $i < $_SESSION["NbArticleEnCours"]; $i++){
			if($_SESSION["panier"][$i]["idE"] ==  $_SESSION['idE']){
				$_SESSION["panier"][$i]["QteC"] += $_SESSION['qteProduit'];
				$_SESSION['alreadyinpanier'] = true;
			}
		}

	     	//Mise en panier
		$unControlleur -> UpdateEquipement($_SESSION['qteProduit'], $_SESSION['idE']);
		if($_SESSION['alreadyinpanier'] == false)
		{
		   	$_SESSION["panier"][$nbarticle]["NomE"] = $_SESSION['libelleProduit'];
			$_SESSION["panier"][$nbarticle]["Descr"] = $_SESSION['descriptionProduit'];	
			$_SESSION["panier"][$nbarticle]["QteC"] = $_SESSION['qteProduit'];
			$_SESSION["panier"][$nbarticle]["Prix"] = $_SESSION['prixProduit'];
			$_SESSION["panier"][$nbarticle]["Image"] = $_SESSION['image'];
			$_SESSION["panier"][$nbarticle]["idE"] = $_SESSION['idE'];	
			$_SESSION["NbArticleEnCours"] +=1;	
		}
		header("Location: vuePanier.php");
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
<div class="card">
  <div class="card-body">
<center style="color: black;">
<h5 class="card-title">Kit mains-libre</h5>
<?php

	$unControlleur -> setTable('equipement');
    $champs = array(' * ');
    $where = array('idT'=>"5");
    $operateur = "";
    $infos = $unControlleur -> selectWhere($champs, $where, $operateur);

	if(empty($_POST['QteE']))
	{
		$QteE=1;
	}else{
		$QteE=$_POST['QteE'];
	}
	echo "<hr />";
	foreach ($infos as $unResultat) 
	{
		echo "<br>
			  <img src=".$unResultat['Image']." class='Infos' style='width:10%;'>";
		echo  '<p style="font: bold; font-weight: 500; color: darkblue;" class="Infos">
				'.$unResultat['NomE'].'</p>';
		echo  '<p class="Infos">
				'.$unResultat['Descr'].'</p>';
		echo "Prix : ".$unResultat['Prix']." €
			  	<br>";
		if ($unResultat['QteE'] > 10)
		{
/*Vert*/	echo '<p class="stockV Infos">En stock</p>';  
		}
		if ($unResultat['QteE'] <= 10 && $unResultat['QteE'] > 0 )
		{
/*Orange*/	echo '<p class="stockO Infos">En stock ( Attention plus que '.$unResultat["QteE"].' article(s) )</p>';  
		}
		if ($unResultat['QteE'] <= 0 )
		{
/*Rouge*/	echo '<p class="stockR Infos">Rupture de stock</p>';
			echo "<hr />";
		}else{
			echo "<form method = 'post' action = ''> 
			<input type='number' name='QteE' value='".$QteE."' style='width:45px' min='1' max='".$unResultat['QteE']."'> 
			<input type='submit' class='btn btn-outline-secondary mt-1' value='Acheter' name='Acheter'> 
			<input type='hidden' value='".$unResultat['idE']."' name='idE'> 
					 </form>";
			echo "<hr />";
		}
	}
	echo "<br>";
?>
</center>
</div>
</div>

<?php
	include("EnTete/enteteBas.php"); 
	ob_end_flush();
?>
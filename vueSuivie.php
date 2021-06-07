<?php 

include("EnTete/enteteHautCo.php");
include ("Controlleur/controlleur.class.php");

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
ob_start()
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

<center style="color: black;">
<br>

<h2 class="mt-5">Suivie de commande</h2>
<br>
<br>
<!-- Afficher toutes les commandes 'en cours de preparation', 'en cours de livraison' et en historique 'livrer', 'annuler' -->
<h3>Commande en cours</h3>

<table>
	<th class="suivie1">Jour de la commande</th>
	<th class="suivie1">Jour de la livraison souhaité</th>
	<th class="suivie1">Etat de vôtre commande</th>
	<th class="suivie1">Prix de la commande sans livraison</th>
	<th class="suivie1">Prix de la livraison</th>
	<th class="suivie1">Prix de la commande avec livraison</th>

	<?php  

		$unControlleur -> setTable('commande');
	    $champs = array('*');
	    $where = array('Etat'=>'en cours de preparation', 'idC'=>$_SESSION['idC']);
	    $operateur = " AND ";
	    $commande = $unControlleur -> selectWhereOrderByComm($champs, $where, $operateur);

	   
		foreach ($commande as $uneCommande) 
		{
			echo "<tr>";
			echo "<form method='GET' action=''>";
			echo "<td class='lisuivie1'>".$uneCommande["DHC"]."</td>";  
			echo "<td class='lisuivie1'>".$uneCommande["DLS"]."</ td>"; 
			echo "<td class='lisuivie1'>".$uneCommande["Etat"]."</ td>";
			echo "<td class='lisuivie1'>".$uneCommande["PrixSansLivraison"]." €</td>"; 
			echo "<td class='lisuivie1'>".$uneCommande["FraisLivraison"]." €</td>";  
			echo "<td class='lisuivie1'>".$uneCommande["PrixAvecLivraison"]." €</td>"; 
			echo "<td> 	<a href = 'vueSuivie.php?action=X&numC=".$uneCommande['numC']."'> 
						  	<img src='Images/cross.png' height='40' width='40'>
						</a> 
						<a href = 'vueSuivie.php?action=Y&numC=".$uneCommande['numC']."' target='_BLANK'> 
						  	<img src='Images/telechargement.png' style='height: 20px; width: 20px;'>
						</a> 
				  </td>";
			echo "</form>";
			echo "</tr>";

			echo "<th class='suivie2'></th>
				  <th class='suivie2'></th>
				  <th class='suivie2'>Libellé</th>
				  <th class='suivie2'>Quantité</th>";

			$unControlleur -> setTable('ligneCommande');
		    $champs = array('Image,NomE,QteE');
		    $where = array('numC'=>$uneCommande['numC']);
		    $operateur = " AND ";
		    $liCommande = $unControlleur -> selectWhereOrderByLi($champs, $where, $operateur);

			foreach ($liCommande as $uneLiCommande) 
			{
				echo "<tr>";
				echo "<td></td>";
				echo "<td class='lisuivie2'><img src=".$uneLiCommande["Image"]." style='height: 80px; width: 80px;' class='Infos'></td>";  
				echo "<td class='lisuivie2'>".$uneLiCommande["NomE"]."</ td>"; 
				echo "<td class='lisuivie2'>".$uneLiCommande["QteE"]."</td>";  
				$_SESSION['nomE']=$uneLiCommande["NomE"];
				$_SESSION['QteE']=$uneLiCommande['QteE'];
				echo "</tr>";	
			}
		}

	?>
	    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Menu Toggle Script -->
<script>
	$("#menu-toggle").click(function(e) {
	e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
    </script>
</table>

</br>
</br>

<h3>Historique des commandes</h3>

<table border="1">
	<th class="suivie1">Jour de la commande</th>
	<th class="suivie1">Jour de la livraison souhaité</th>
	<th class="suivie1">Etat de vôtre commande</th>
	<th class="suivie1">Prix de la commande sans livraison</th>
	<th class="suivie1">Prix de la livraison</th>
	<th class="suivie1">Prix de la commande avec livraison</th>

	<?php  
		$unControlleur -> setTable('commande');
	    $commandeH = $unControlleur -> selectCommandeEtat($_SESSION['idC']);

		foreach ($commandeH as $uneCommandeH) 
		{
			echo "<tr>";
			echo "<form method='GET' action=''>";
			echo "<td class='lisuivie1'>".$uneCommandeH["DHC"]."</td>";  
			echo "<td class='lisuivie1'>".$uneCommandeH["DLS"]."</ td>"; 
			// echo "<td class='lisuivie1'>".$uneCommandeH["Etat"]."</ td>";
			if ($uneCommandeH["Etat"] == "en cours de livraison" )
			{
	/*Orange*/	echo "<td style='color:chocolate' class='lisuivie1'>".$uneCommandeH["Etat"]."</ td>";
			}
			if ($uneCommandeH["Etat"] == "livrer" )
			{
	/*Rouge*/	echo "<td style='color:red' class='lisuivie1'>".$uneCommandeH["Etat"]."</ td>";
			}

			echo "<td class='lisuivie1'>".$uneCommandeH["PrixSansLivraison"]." €</td>"; 
			echo "<td class='lisuivie1'>".$uneCommandeH["FraisLivraison"]." €</td>";  
			echo "<td class='lisuivie1'>".$uneCommandeH["PrixAvecLivraison"]." €</td>"; 
			echo "<td> 	<a href = 'vueSuivie.php&action=X&numC=".$uneCommandeH['numC']."'> 
						  	<img src='Images/cross.png' height='40' width='40'>
						</a> 
						<a href = 'vueSuivie.php?action=Y&numC=".$uneCommandeH['numC']."' target='_BLANK'> 
						  	<img src='Images/telechargement.png' style='height: 20px; width: 20px;'>
						</a> 
				  </td>";
			echo "</form>";
			echo "</tr>";
		}
	?>

</table>
</center>

<!-- Traitement du bouton supprimer -->
<?php  
	if(isset($_GET['action']))
	{
		$action = $_GET['action'];
		$numC = $_GET['numC'];
		if($action == "X")
		{
			$unControlleur -> setTable('ligneCommande');
		    $champs = array('idE,QteE');
		    $where = array('numC'=>$numC);
		    $operateur = "";
		    $unecommandeEff = $unControlleur -> selectWhere($champs,$where,$operateur);
		    foreach ($unecommandeEff as $key) {  	
		   		$idESelect = $key['idE'];
		    	$QteEff = $key['QteE'];
		    	$unControlleur -> RajoutQuandDiminutionQteEquipPanier($idESelect,$QteEff);
		    }

			$unControlleur -> setTable('ligneCommande');
		    $where = array('numC'=>$numC);
		    $unControlleur -> delete($where);

			$unControlleur -> setTable('commande');
		    $where = array('numC'=>$numC);
		    $unControlleur -> delete($where);

		    //ader("Location: vueSuivie.php");
		}

		if ($action == 'Y') 
		  {
		    require('fpdf/fpdf.php');

		    class PDF extends FPDF
			{
				// En-tête
				function Header()
				{
				    // Police Arial gras 15
				    $this->SetFont('Arial','B',10);

					// Décalage à droite
				    $this->Cell(70);
 					// Titre
				    $this->Cell(50,10,utf8_decode('Facture de vôtre commande'),1,0,'C');
				   

				    $this->Ln(30);
				    // Logo
				    $this->Image('Images/logo_filelec.png',10,30,30);
				    $this->Cell(0,5,utf8_decode('5 Boulevard Malesherbes, 75008 Paris'),0,1);
				    $this->Cell(0,5,utf8_decode('+00 (123) 456 7890'),0,1);
				    $this->Cell(0,5,utf8_decode('filelec-contact@gmail.com'),0,1);

				    $this->Ln(10);
				    $this->SetX($this->lMargin);
				    $this->Cell(0,5,utf8_decode($_SESSION['prenom']. " " .$_SESSION['nom']),0,1,"R");
				    $this->SetX($this->lMargin);
				    $this->Cell(0,5,utf8_decode($_SESSION['nomSoc']),0,1,"R");
				    $this->SetX($this->lMargin);
				    $this->Cell(0,5,utf8_decode($_SESSION['adresse']. ", " .$_SESSION['ville']. " " .$_SESSION['cp']),0,1,"R");
				    $this->SetX($this->lMargin);
				    $this->Cell(0,5,utf8_decode($_SESSION['email']),0,1,"R");

				    $this->Ln(15);
				}

				// Pied de page
				function Footer()
				{
				    // Positionnement à 1,5 cm du bas
				    $this->SetY(-15);
				    // Police Arial italique 8
				    $this->SetFont('Arial','I',8);
				    // Numéro de page
				    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
				}
			}

			// Instanciation de la classe dérivée
			$pdf = new PDF();
			$pdf->AliasNbPages();
			$pdf->AddPage();
			$pdf->SetFont('Times','',12);

			$pdf->Cell(0,10,utf8_decode( "Article(s) acheté(s) :"),0,1);

			$unControlleur -> setTable('ligneCommande');
		    $champs = array('NomE,QteE,Descr');
		    $where = array('numC'=>$numC);
		    $operateur = " AND ";
		    $liCommande = $unControlleur -> selectWhereOrderByLi($champs, $where, $operateur);
			foreach ($liCommande as $uneLiCommande) 
			{
			    $pdf->Cell(0,5,utf8_decode("> ".$uneLiCommande["NomE"]." : " ),0,1);
			    $pdf->Cell(0,5,utf8_decode("- Quantité : " .$uneLiCommande['QteE'] ),0,2);
			    $pdf->Cell(0,5,utf8_decode("- Description : ".$uneLiCommande["Descr"] ),0,1);
			}

			$unControlleur -> setTable('commande');
		    $champs = array('PrixSansLivraison,FraisLivraison,PrixAvecLivraison');
		    $where = array('numC'=>$numC);
		    $operateur = " AND ";
		    $commande = $unControlleur -> selectWhereOrderByComm($champs, $where, $operateur);
			foreach ($commande as $uneCommande) 
			{
				$pdf->Cell(0,5, "----------------------------------------------------------------------",0,1);
				$pdf->Cell(0,5, utf8_decode("Prix sans les frais de transport : ".$uneCommande["PrixSansLivraison"]." euros"),0,1);
				$pdf->Cell(0,5, utf8_decode("Frais de transport : ".$uneCommande["FraisLivraison"]." euros"),0,1);
				$pdf->Cell(0,5, utf8_decode("Prix Total : ".$uneCommande["PrixAvecLivraison"]." euros"),0,1);
			}
			$pdf->Output();
		  }
	}


		ob_end_flush();
		include("EnTete/enteteBas.php");
?>
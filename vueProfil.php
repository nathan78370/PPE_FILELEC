
<?php 
include ("Controlleur/controlleur.class.php");
    $unControlleur = new Controlleur("localhost", "Filelec", "root", "");
include("EnTete/enteteHautCo.php"); 
	if (isset($_POST["deco"])) 
	{
	    session_destroy();
	    session_start();
	}
	if (!isset($_SESSION["idC"])) 
	{
	    header("Location: vueAccueil.php");
	}
	ob_start();
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
<center style="color: black;">

<form method="POST" values="">
	<input type='submit' name='rdv' value='Voir rendez vous' class="btn btn-light mb-5">
</form>

    <h5 class="card-title"><i class="far fa-address-card mr-3"></i>Profil</h5>
<?php
 	$unControlleur -> setTable('client');
    $champs = array(' * ');
    $where = array('idC'=>$_SESSION['idC']);
    $operateur = " and ";
    $resultat = $unControlleur -> selectWhere($champs, $where, $operateur);

    foreach ($resultat as $unResultat) 
    {
        $_SESSION['idC'] = $unResultat['idC'];   
        $_SESSION['prenom']= $unResultat['PrenomC'];
        $_SESSION['nomC']= $unResultat['NomC'];
        $_SESSION['email'] = $unResultat['MailC']; 
        $_SESSION['mdp']= $unResultat['mdpC'];
        $_SESSION['adresse']= $unResultat['AdrC'];
        $_SESSION['ville'] = $unResultat['Ville'];
        $_SESSION['cp'] = $unResultat['CP'];
        $_SESSION['pays'] = $unResultat['Pays'];
    }

    if(isset($_POST['rdv']))
	{
  		header("Location: vueRendezVous.php");
	}
        
//Creation tableau pour le profil
echo "<form method = 'post' action = ''>";

if(isset($_SESSION["typeC"]))
{
	if($_SESSION["idC"] == "idC")
	{

		echo "<div class='row' style='color: black;'>
				<div class='col-4'>
					<div class='float-right'>
						<p>Nom : </p>
					</div>
				</div>
				<div class='col-8'>
					<div class='float-left'>
						<input type='text' size='75' name='NomC' value='".$_SESSION['nom']."' width='10%'/ placeholder='".$_SESSION['nom']."'>
					</div>
				</div>
			</div>";

		echo "<div class='row'>
				<div class='col-4'>
					<div class='float-right'>
						<p>Prenom : </p>
					</div>
				</div>
				<div class='col-8'>
					<div class='float-left'>
						<input type='text'size='75' name='PrenomC' value='".$_SESSION['prenom']."' width='10%'/ placeholder='".$_SESSION['prenom']."'>
					</div>
				</div>
			</div>";
	}else{
		echo "<div class='row'>
				<div class='col-4'>
					<div class='float-right'>
						<p>Nom de société :</p>
					</div>
				</div>
				<div class='col-8'>
					<div class='float-left'>
						<input type='text' size='75' name='nomSoc' value='".$_SESSION['prenom']."' width='10%'/ placeholder='".$_SESSION['prenom']."'>
					</div>
				</div>
			</div>";
	}				
}	

echo "<div class='row'>
	<div class='col-4'>
		<div class='float-right'>
			<p>Adresse : </p>
		</div>
	</div>

	<div class='col-8'>
		<div class='float-left'>
			<input type='text' size='75' name='AdrC' value='".$_SESSION['adresse']."' width='120%'/ placeholder='".$_SESSION['adresse']."'>
		</div>
	</div>
</div>"; 

echo "<div class='row'>
	<div class='col-4'>
		<div class='float-right'>
			<p>Ville : </p>
		</div>
	</div>

	<div class='col-8'>
		<div class='float-left'>
			<input type='text' size='75' name='Ville' value='".$_SESSION['ville']."' width='120%'/ placeholder='".$_SESSION['ville']."'>
		</div>
	</div>
</div>";

echo "<div class='row'>
	<div class='col-4'>
		<div class='float-right'>
			<p>CP : </p>
		</div>
	</div>

	<div class='col-8'>
		<div class='float-left'>
			<input type='text' size='75' name='CP' value='".$_SESSION['cp']."' width='120%'/ placeholder='".$_SESSION['cp']."'>
		</div>
	</div>
</div>";

echo "<div class='row'>
	<div class='col-4'>
		<div class='float-right'>
			<p>Pays : </p>
		</div>
	</div>

	<div class='col-8'>
		<div class='float-left'>
			<input type='text' size='75' name='Pays' value='".$_SESSION['pays']."' width='120%'/ placeholder='".$_SESSION['pays']."'>
		</div>
	</div>
</div>";
?>
<br>

<h5 class="card-title"><i class="fas fa-user-alt mr-3"></i>Compte</h5>
<?php
		echo "<tr>";

		echo "<div class='row mt-5'>
	<div class='col-4'>
		<div class='float-right'>
			<p>Email : </p>
		</div>
	</div>

	<div class='col-8'>
		<div class='float-left'>
			<input type='text'size='75' name='MailC' value='".$_SESSION['email']."' width='10%'/ placeholder='".$_SESSION['email']."'>
		</div>
	</div>
</div>";

		echo "<div class='row mb-5'>
	<div class='col-4'>
		<div class='float-right'>
			<p>Mdp : </p>
		</div>
	</div>

	<div class='col-8'>
		<div class='float-left'>
			<input type='text'size='75' name='mdpC' value='".$_SESSION['mdp']."' width='10%'/ placeholder='".$_SESSION['mdp']."'>
		</div>
	</div>
</div>
<input type='submit' name='edit' value='Sauvegarder' class='btn btn-light mb-5'> 
</form>";
?>

<?php
	if(isset($_POST["edit"]))
	{
		if($_SESSION["idC"]=='idC')
		{
			$tabCLient['PrenomC'] = $_POST["PrenomC"];
			$tabCLient['NomC'] = $_POST["NomC"];
		}
		if($_SESSION["typeC"]=='Professionnel')
		{
			$tabCLient['NomSoc'] = $_POST["nomSoc"];
		}	
		$tabCLient['AdrC'] = $_POST["AdrC"];
		$tabCLient['Ville'] = $_POST["Ville"];
		$tabCLient['CP'] = $_POST["CP"];
		$tabCLient['Pays'] = $_POST["Pays"];

		$tabCLient['MailC'] = $_POST["MailC"];
		$tabCLient['mdpC'] = $_POST["mdpC"];
		
		$unControlleur -> setTable('client');
		$where = array('idC'=>$_SESSION['idC']);
		$unControlleur -> update($tabCLient,$where);
		header("Location: vueProfil.php");
	}
?>

</center>
<?php
	include("EnTete/enteteBas.php"); 
			ob_end_flush();
?>
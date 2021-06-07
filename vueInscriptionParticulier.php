<?php

include ("Controlleur/controlleur.class.php");
include("EnTete/enteteHaut.php"); 
$unControlleur = new Controlleur("localhost", "Filelec", "root", "");
if (isset($_POST['ValiderPart']))
{
	if( (!empty($_POST['PrenomC'])) && (!empty($_POST['NomC'])) && (!empty($_POST['AdrC'])) && (!empty($_POST['Ville'])) && (!empty($_POST['CP'])) && (!empty($_POST['Pays'])) )
	{
		if ( (!empty($_POST['MailC'])) &&  (!empty($_POST['mdpC'])))
			{
				if ( (!preg_match("/([^A-Za-zéèàùêâëäüï&ç -])/",$_POST['PrenomC'])) || (!preg_match("/([^A-Za-zéèàùêâëäüï&ç -])/",$_POST['NomC'])) || (!preg_match("/([^A-Za-zéèàùêâëäüï&ç0-9 -])/",$_POST['AdrC'])) || (!preg_match("/([^A-Za-zéèàùêâëäüï&ç-])/",$_POST['Ville'])) || (!preg_match("/([^0-9-])/",$_POST['CP'])) || (!preg_match("/([^A-Za-zéèàùêâëäüï&ç --])/",$_POST['Pays']))) 
						{
						if ( (!preg_match("/([^A-Za-zéèàùêâëäüï&ç@._0-9--])/",$_POST['MailC'])) || (!preg_match("/([^A-Za-zéèàùêâëäüï&#ç@0-9-])/",$_POST['mdpC'])) )
							{
								$tabCli['PrenomC'] = $_POST['PrenomC'];
								$tabCli['NomC'] = $_POST['NomC'];
								$tabCli['MailC'] = $_POST['MailC'];
								$tabCli['mdpC'] = $_POST['mdpC'];
								$tabCli['AdrC'] = $_POST['AdrC'];
								$tabCli['Ville'] = $_POST['Ville'];
								$tabCli['CP'] = $_POST['CP'];
								$tabCli['Pays'] = $_POST['Pays'];
								$unControlleur -> setTable('client');
								$resultat = $unControlleur -> insert($tabCli);	
								header("Location: vueInscriptionValidation.php");
						}else{
							echo "Vous avez mis des caractères interdits ! Veuillez vous référencer aux * .";
						}
					}else{
						echo "Vous avez mis des caractères interdits ! Veuillez vous référencer aux * .";
					}
			}else{
				echo "Vous devez remplir tous les champs !";
			}
	}else{
		echo "Vous devez remplir tous les champs !";
	}
}

	if (isset($_POST['AnnulerPart']))
	{
		header("Location: vueInscriptionType.php");
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
            <li><a href="index.php">Accueil</a></li>
            <li><a href="vueApropos.php">A propos</a></li>
            <li><a href="vueFaq.php">FAQ</a></li>
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

  </div>

<br>
<!-- <center>
	<h1> Particulier </h1>
	<form method="post"	action="">
		<table border = 0>
			<tr><td> Prenom : </td><td><input type="text" name="PrenomC" value="<?php if (isset($resultats)) echo $resultats['PrenomC']; ?>" minlength="3" maxlength= "50"></td><br/></tr>
			<tr><td> Nom : </td><td><input type="text" name="NomC" value="<?php if (isset($resultats)) echo $resultats['NomC']; ?>" minlength="3" maxlength= "50"></td><br/></tr>
			<tr><td> Adresse : </td><td><input type="text" name="AdrC" value="<?php if (isset($resultats)) echo $resultats['AdrC']; ?>" minlength="3" maxlength= "50"></td><br/></tr>
			<tr><td> Ville : </td><td><input type="text" name="Ville" value="<?php if (isset($resultats)) echo $resultats['Ville']; ?>" minlength="3" maxlength= "50"></td><br/></tr>
			<tr><td> Code Postal : </td><td><input type="text" name="CP" value="<?php if (isset($resultats)) echo $resultats['CP']; ?>" minlength="3" maxlength= "5"></td><br/></tr>
			<tr><td> Pays : </td><td><input type="text" name="Pays" value="<?php if (isset($resultats)) echo $resultats['Pays']; ?>" minlength="3" maxlength= "25"></td></tr>
		</table>

		<h2> Compte </h2>
		<table border = 0>
			<tr><td> Email : </td><td><input type="text" name="MailC" value="<?php if (isset($resultats)) echo $resultats['MailC']; ?>"></td><br/></tr>
			<tr><td> Mot de passe : </td><td><input type="text" name="mdpC" value="<?php if (isset($resultats)) echo $resultats['mdpC']; ?>"></td><br/></tr>
		</table>

		<tr><td><input type="submit" name="ValiderPart" value="Valider" style="width:250px"></td></tr><br/>
		<tr><td><input type="submit" name="AnnulerPart" value="Annuler" style="width:250px"></td></tr>
	</form>
</center> -->

<form method="post" action="">
	<div style="width: 50%; margin-left: 25%;">
		<div class="m-5">
			<h2> Particulier </h2>
		</div>
		<div class="row">
			<div class="col m-1">
				<label>Prénom</label>
				<input type="text" class="form-control" placeholder="Exemple : Jérome, Maxime, Antoine ..." name="PrenomC" value="<?php if (isset($resultats)) echo $resultats['PrenomC']; ?>" minlength="3" maxlength= "50">
			</div>
			<div class="col m-1">
				<label>Nom</label>
				<input type="text" class="form-control" placeholder="Exemple : Dupond, Nguyen, Marchant ..." name="NomC" value="<?php if (isset($resultats)) echo $resultats['NomC']; ?>" minlength="3" maxlength= "50">
			</div>
		</div>
		<div class="row">
			<div class="col m-1">
				<label>Adresse</label>
				<input type="text" class="form-control" placeholder="Exemple : 6 Rue Boulet ..." name="AdrC" value="<?php if (isset($resultats)) echo $resultats['AdrC']; ?>" minlength="3" maxlength= "50">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-6 m-1">
				<label for="inputCity">Ville</label>
				<input type="text" class="form-control" placeholder="Exemple : Paris" name="Ville" value="<?php if (isset($resultats)) echo $resultats['Ville']; ?>" minlength="3" maxlength= "50">
			</div>
			<div class="form-group col-md-4 m-1">
				<label for="inputState">Pays</label>
				<input type="text" class="form-control" placeholder="Exemple : France" name="Pays" value="<?php if (isset($resultats)) echo $resultats['Pays']; ?>" minlength="3" maxlength= "25">
			</div>
			<div class="form-group col-md-2 m-1">
				<label for="inputZip">Code Postal</label>
				<input type="text" class="form-control" id="inputZip" placeholder="Exemple : 75000" name="CP" value="<?php if (isset($resultats)) echo $resultats['CP']; ?>" minlength="5" maxlength= "5">
			</div>
		</div>

		<div class="m-5">
			<h2> Compte </h2>
		</div>
		<div class="form-group m-1">
			<label for="exampleInputEmail1">Email</label>
			<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Exemple : dupond.jerome@gmail.com" name="MailC" value="<?php if (isset($resultats)) echo $resultats['MailC']; ?>">
		</div>
		<div class="form-group m-1">
			<label for="exampleInputPassword1">Mot de passe</label>
			<input type="password" class="form-control" placeholder="Password" name="mdpC" value="<?php if (isset($resultats)) echo $resultats['mdpC']; ?>">
		</div>
		<div class="m-5 text-center">
			<input type="submit" name="ValiderPart" value="Valider" class="btn btn-primary" style="width:250px">
			<input type="submit" name="AnnulerPart" value="Annuler" class="btn btn-primary" style="width:250px">
		</div>
	</div>
</form>


<?php include("EnTete/enteteBas.php"); ?>


<?php 
include ("Controlleur/controlleur.class.php");
include("EnTete/enteteHaut.php"); 
$unControlleur = new Controlleur("localhost", "Filelec", "root", "");
if (isset($_POST['ValiderFinal']))
	{
		header("Location: vueAccueilCo.php");
	}
?>
<br>
<center>
	<p>Bravo !</p>
	<p>Vous êtes bien inscrit sur notre site !</p>
	<p>Cliquer sur "valider" pour retourner sur la page d'aceuil !</p>

	<form method="post"	action="">
	<tr><td><input type="submit" name="ValiderFinal" value="Valider" style="width:250px"></td></tr><br/>
	</form>
</center>
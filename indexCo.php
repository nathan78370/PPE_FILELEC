<?php
	include ("Controlleur/controlleur.class.php");
	if (isset($_POST["deco"])) 
	{
	    session_destroy();
	    session_start();
	}
	if (!isset($_SESSION["idC"])) 
	{
	    header("Location: vueAccueil.php");
	}
	$unControlleur = new Controlleur("localhost", "Filelec", "root", "");
?>

<!DOCTYPE html>
<html>  
<br/>
<?php
		if(isset($_GET['page']))
		{
			$page = $_GET['page'];
		}else{
			$page = 3;
		}

		switch ($page) 
		{
			case 1.2 :
				header("Location: vueAproposCo.php");
				break;
			case 2.2 :
				header("Location: vueFaqCo.php");
				break;
			case 3 :
				header("Location: vueAccueilCo.php");
			break;
			case 4 :
				header("Location: vueAchat.php");
			break;
			case 4.1 :
				header("Location: vueAchatAutoradio.php");
			break;
			case 4.2 :
				header("Location: vueAchatGPS.php");
			break;
			case 4.3 :
				header("Location: vueAchatAideConduite.php");
			break;
			case 4.4 :
				header("Location: vueAchatHautParleurs.php");
			break;
			case 4.5 :
				header("Location: vueAchatKitMainsLibre.php");
			break;
			case 4.6 :
				header("Location: vueAchatAmplificateur.php");
			break;
			case 5 :	
				header("Location: vuePanier.php");
			break;
			case 6 :
				header("Location: vueProfil.php");
			break;
			case 6.1 :
				header("Location: vueSuivie.php");
			break;
			case 6.2 :
				header("Location: vueDeconexion.php");
			break;
		}
	?>
</html>


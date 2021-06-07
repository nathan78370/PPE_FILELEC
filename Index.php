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
			case 1 :
				header("Location: vueApropos.php");
				break;
			case 2 :
				header("Location: vueFaq.php");
				break;
			case 3 :
				header("Location: vueAccueil.php");
			break;
			case 7 :
				header("Location: vueInscriptionTypeNC.php");
				break;
			case 4.1 :
			header("Location: vueAchatAutoradioNC.php");
				break;
			case 4.2 :
			header("Location: vueAchatGPSNC.php");
				break;
			case 4.3 :
			header("Location: vueAchatAideConduiteNC.php");
				break;
			case 4.4 :
			header("Location: vueAchatHautParleursNC.php");
				break;
			case 4.5 :
			header("Location: vueAchatKitMainsLibreNC.php");
				break;
			case 4.6 :
			header("Location: vueAchatAmplificateurNC.php");
				break;
		}
	?>
</html>


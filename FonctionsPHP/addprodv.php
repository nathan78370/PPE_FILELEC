<?php
			$serveur ="localhost";
			$bdd ="filelec";
			$user ="root";
			$mdp="";
			$connexion = mysqli_connect($serveur, $user, $mdp);
			mysqli_select_db($connexion, $bdd);
			$requete ="select * from equipement;";
			$resultats = mysqli_query($connexion, $requete);

		if (isset($_POST["Valider"]))
		{
		$QteE = $_POST["QteE"];
		$NomE = $_POST["NomE"];
		$Descr = $_POST["Descr"];
		$Prix = $_POST["Prix"];
		$DateCrea = $_POST["DateCrea"];
		$Image = $_POST["img"];
		$idB = $_POST["idB"];
		$idT = $_POST["idT"];
		$requete = "insert into equipement values('0', '$QteE', '$NomE','$Descr','$Prix','$DateCrea','$Image','$idB','$idT')";
		echo $requete;
		$resultats = mysqli_query($connexion,$requete);
		echo "Le produit ".$NomE."a été ajouté !";
		mysqli_close($connexion);
		}
?>
<?php include 'functions.php';
?>
<?=template_header('Place Order')?>

<?php
			$serveur ="localhost";
			$bdd ="Automobile";
			$user ="root";
			$mdp="";
			$connexion = mysqli_connect($serveur, $user, $mdp);
			mysqli_select_db($connexion, $bdd);
			$requete ="select * from bonlivraison;";
			$resultats = mysqli_query($connexion, $requete);

		if (isset($_POST["Valider"]))
		{
		$datelivraison = $_POST['DateLivraison'];
		$adresse = $_POST['Adresse'];
		$produit = $_POST['idProduit'];
		$requete = "insert into bonlivraison values('','$produit','', '$datelivraison','$adresse')";
		$resultats = mysqli_query($connexion,$requete);
		mysqli_close($connexion);
		}
?>
<div class="placeorder content-wrapper">
    <h1>Votre commande est passé !</h1>
    <p>Merci d'avoir commander chez nous, vous reçeverez plus d'informations par mail !</p>
</div>

<?=template_footer()?>
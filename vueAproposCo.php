<?php 
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

<div class="card m-5" style="color: black;">
  <h5 class="card-title text-center">Qui sommes-nous ?</h5>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      	<p> Nous sommes un grossiste dédiés à la vente aux professionnels mais également aux particuliers. Grâce à nos contacts et nos stock importants, Filelec propose des prix dédiés abordable. Notre siège social est situé à Lyon. </p>
		<br/>

		 <!-- Mettre image de la localisation -->

		<p> On peut fabriquer tout ou partie de la commande en fonction de la quantité commandée et de la gestion des stocks pratiquée par le client. L'ordre de fabrication initie le processus de fabrication. On organise la chaîne et l'équipe de production à ce moment-là. On commande aux fournisseurs les matières premières, les factures étant transmises à la comptabilité. Une demande de livraison dans la majorité des cas déclenchera la production des produits. Les produits fabriqués seront structurés en lots de livraison transportables par camion ; à ce stade, on date la fabrication. Un ordre de fabrication donne lieu à une ou plusieurs demandes de livraison. Une demande de livraison fera l'objet d’un ou plusieurs lots de livraisons. </p>
		<br/>

		<div class="card-deck">
		    	<img class="card-img-top" src="Images/intro2.jpg" alt="Card image cap" style="width: 33%">
		    	<img class="card-img-top" src="Images/intro3.jpg" alt="Card image cap" style="width: 33%">
		    	<img class="card-img-top" src="Images/intro4.jpg" alt="Card image cap" style="width: 33%">
		</div>

		<br/>
		<p> La livraison se fait par camion. Un camion constitue un ou plusieurs lots de livraison à destination d’un ou plusieurs clients. Pour un client il y a un bon de livraison correspondant à un ou plusieurs lots de livraisons. Avant le départ du camion, le client est averti de l'arrivée de celui-ci et de son contenu par rapport à la commande par un avis de livraison qui lui est faxé ou téléphoné. </p>
		<br/>

		<p> Le client vérifie le lot de livraison et, s'il est d'accord, signe le bon de livraison. Le bon de livraison est transmis à la comptabilité pour établir la facturation. On enregistre la date de départ du camion et la date de livraison du lot de livraison. </p>
		<br/>

		<p> Le bon de commande est valable pendant un certain délai. Si le bon de commande a été signé par le client, le service commercial envoie un ordre de fabrication à la production et une demande de facturation à la comptabilité. Si le délai est dépassé, une lettre de relance est envoyée ; dans ce cas, si le nouveau délai est dépassé sans réponse du client la commande est annulée. </p>
		<br/>
      <footer class="blockquote-footer float-right">Directeur de Filelec</footer>
    </blockquote>
  </div>
</div>

<?php 
include("EnTete/enteteBas.php");
?>
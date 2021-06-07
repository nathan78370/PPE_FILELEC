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

<center style="color: black;">
	<br>
<h2>Achats</h2>

<div class="card-deck p-5">
<div class="row p-5" >

  <div class="card" style="width: 25%">
  	<a href="indexCo.php?page=4.1">
    <img class="card-img-top" src="Images/achat/TOKAI_LAR-15B.jpg" alt="Card image cap" style="width: 25%">
    <div class="card-body">
      <h5 class="card-title">Autaradios</h5>
    </a>
    </div>
    
  </div>
  <div class="card" style="width: 25%">
  	<a href="indexCo.php?page=4.2">
    <img class="card-img-top" src="Images/achat/MAPPY_ULTI_E538.jpg" alt="Card image cap" style="width: 25%">
    <div class="card-body">
      <h5 class="card-title">GPS</h5>
      </a>
    </div>
    
  </div>
  <div class="card" style="width: 25%">
  	<a href="indexCo.php?page=4.3">
    <img class="card-img-top" src="Images/achat/CAMERA_DE_RECUL_BEEPER_RWEC100X-RF.jpg" alt="Card image cap" style="width: 25%">
    <div class="card-body">
      <h5 class="card-title">Aide à la conduite</h5>
    </a>
    </div>
    
  </div>
</div>

<div class="row p-5">
	<div class="card" style="width: 25%">
	<a href="indexCo.php?page=4.4">
    <img class="card-img-top" src="Images/achat/PIONEER_Ts-13020_I.jpg" alt="Card image cap" style="width: 25%">
    <div class="card-body">
      <h5 class="card-title">Haut-Parleurs</h5>
    </a>
    </div>
    
  </div>
  <div class="card" style="width: 25%">
  <a href="indexCo.php?page=4.5">
    <img class="card-img-top" src="Images/achat/SUPERTOOTH_BUDDY_NOIR.jpg" alt="Card image cap" style="width: 25%">
    <div class="card-body">
      <h5 class="card-title">Kit mains-libre</h5>
    </a>
    </div>
    
  </div>
  <div class="card" style="width: 25%">
  <a href="indexCo.php?page=4.6">
    <img class="card-img-top" src="Images/achat/MTX_RFL4001D.jpg" alt="Card image cap" style="width: 25%">
    <div class="card-body">
      <h5 class="card-title">Amplificateur</h5>
    </a>
    </div>
    
  </div>
</div>
</div>
	
</center>	
<?php
include("EnTete/enteteBas.php"); 
?>
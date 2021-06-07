<?php
include ("Controlleur/controlleur.class.php");
$unControlleur = new Controlleur("localhost", "Filelec", "root", "");
//Particulier
	if (isset($_POST['Particulier']))
	{
		header("Location: vueInscriptionParticulier.php");				
	}

//Profesionnel
	if (isset($_POST['Professionnel']))
	{
		header("Location: vueInscriptionProfessionnel.php");
	}
?>
<html>
	<?php include("EnTete/enteteHaut.php"); ?>

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

<br/>
<div class="m-5">
  <center>
    <h5 class="card-title">Votre situation</h5>
  <br/>
  <br/>

  <p> Choissiez votre situation </p>
  <form method="post" action="">
    <button type="submit" name="Particulier" class="btn btn-info">Particulier</button>
    <button type="submit" name="Professionnel" class="btn btn-info">Professionnel</button>
  	<!-- <input type="submit" name="Particulier" value="Particulier">
  	<input type="submit" name="Professionnel" value="Professionnel"> -->
  </form>

  <br/>
  <br/>
  <br/>
  <br/>

  </center>
</div>

<?php include("EnTete/enteteBas.php"); ?>

</html>
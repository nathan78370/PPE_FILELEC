<?php 
	include ("Controlleur/controlleur.class.php");
	include("EnTete/enteteHaut.php");
    $unControlleur = new Controlleur("localhost", "Filelec", "root", "");
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
<div class="card">
  <div class="card-body">
<center style="color: black;">
<h5 class="card-title">Aide à la conduite</h5>
<?php

	$unControlleur -> setTable('equipement');
    $champs = array(' * ');
    $where = array('idT'=>"3");
    $operateur = "";
    $infos = $unControlleur -> selectWhere($champs, $where, $operateur);

	if(empty($_POST['QteE']))
	{
		$QteE=1;
	}else{
		$QteE=$_POST['QteE'];
	}
	echo "<hr />";
	foreach ($infos as $unResultat) 
	{
		echo "<br>
			  <img src=".$unResultat['Image']." class='Infos' style='width:10%;'>";
    echo  '<p style="font: bold; font-weight: 500; color: darkblue;" class="Infos">
        '.$unResultat['NomE'].'</p>';
		echo  '<p class="Infos">
				'.$unResultat['Descr'].'</p>';
		echo "Prix : ".$unResultat['Prix']." €
			  	<br>";
		if ($unResultat['QteE'] > 10)
		{
/*Vert*/	echo '<p class="stockV Infos">En stock</p>';  
		}
		if ($unResultat['QteE'] <= 10 && $unResultat['QteE'] > 0 )
		{
/*Orange*/	echo '<p class="stockO Infos">En stock ( Attention plus que '.$unResultat["QteE"].' article(s) )</p>';  
		}
		if ($unResultat['QteE'] <= 0 )
		{
/*Rouge*/	echo '<p class="stockR Infos">Rupture de stock</p>';
			echo "<hr />";
		}
		echo "<hr />";
	}
	echo "<br>";
?>
</center>
</div>
</div>

<?php
	include("EnTete/enteteBas.php"); 
?>
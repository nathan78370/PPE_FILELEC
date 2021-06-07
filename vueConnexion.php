<?php
	include("EnTete/enteteHaut.php"); 
	include ("Controlleur/controlleur.class.php");
    $unControlleur = new Controlleur("localhost", "Filelec", "root", "");
    if (isset($_POST["Valider"]))
    {
      $unControlleur -> setTable('client');
      $champs = array(' * ');
      $where = array('MailC'=>$_POST['email'], 'mdpC'=>$_POST['mdp']);
      $operateur = " and ";
      $resultat = $unControlleur -> selectWhere($champs, $where, $operateur);



      if ($resultat != null && $resultat != false)
      { 
        session_start();

        $_SESSION['idC'] = $resultat['idC'];
        
        $unControlleur -> setTable('client');
        $champs = array(' * ');
        $where = array('idC'=>$_SESSION['idC']);
        $operateur = " and ";
        $unControlleur -> selectWhere($champs, $where, $operateur);
      
        foreach ($resultat as $unResultat) 
        {
            $_SESSION['idC'] = $unResultat['idC'];   
            $_SESSION['prenom']= $unResultat['PrenomC'];
            $_SESSION['nom']= $unResultat['NomC'];
            $_SESSION['email'] = $unResultat['MailC']; 
            $_SESSION['mdp']= $unResultat['mdpC'];
            $_SESSION['adresse']= $unResultat['AdrC'];
            $_SESSION['ville'] = $unResultat['Ville'];
            $_SESSION['cp'] = $unResultat['CP'];
            $_SESSION['pays'] = $unResultat['Pays'];
        }
        
        $_SESSION['Connecter'] = 1;
        header("Location: vueAccueilCo.php");
      }
      else
      {
        echo '<script language="Javascript">
        alert ("Erreur : Veuillez revérifier vos identifiants !");
        </script>';
      }
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
<br>
<center>
  <form method = "post" action = "" style="width: 600px;">
		<table border = 0 ">
			<tr><td>Email : </td><td><input type="text" name="email" style="width:400px;"></td></tr>
			<tr><td>Mot de passe : </td><td><input type="password" name="mdp" style="width:400px;"></td></tr>
		</table>
		<center>
		<tr><td><input type="submit" name="Valider" value = "Connexion" style="width:150px;"></td></tr>
		</center>
	</form>
</center>
</br>
</br>

<?php 
  include("EnTete/enteteBas.php"); 
 ?>
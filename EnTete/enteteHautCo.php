<head>
  	<title>Filelec : Vente de toutes pièces automobile</title>
 	<link rel="shortcut icon" type="image/x-icon" href="Images/favicon-filelec.png" />

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="CSS/styles.css" >
	<!-- Faire un fichier .js et mettre entre les balises head : -->
	<script type="text/javascript" src="JS/menu.js"></script>
	<!-- Ou copier le code ci-dessus dans les balises : -->
	<script type="text/javascript"></script>

	<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
	<script src="layout/scripts/jquery.min.js"></script>
	<script src="layout/scripts/jquery.backtotop.js"></script>
	<script src="layout/scripts/jquery.mobilemenu.js"></script>
	<script src="layout/scripts/jquery.flexslider-min.js"></script>

	<!-- FRAMEWORK -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link href="calendar.css" type="text/css" rel="stylesheet" />
	<!-- FRAMEWORK -->
	<?php  
		session_start();
	?>
</head>
<body>
	<div class="bgded text-white" style="background-image:url('Images/intro.jpg'); height: 50%;">
	<div class="wrapper row0">
      <div id="topbar" class="hoc clear"> 

        <div class="fl_left">
          <ul>
            <li><i class="fa fa-phone"></i> +00 (000) 000 0000</li>
            <li><i class="fas fa-at"></i> filelec@filelec.com</li>
          </ul>
        </div>

        <div class="fl_right">
          <ul>
            <form method="get" action="">            	
            	<li><a href="vueAccueilCo.php?profil=1"><i class="fas fa-sign-out-alt"></i>Profil</a></li>
            	<?php
					if (isset($_GET["profil"])) 
					{
						header("Location: vueProfil.php");
					}
            	?>
            </form>
            <form method="get" action="">            	
            	<li><a href="vueAccueilCo.php?deco=1"><i class="fas fa-sign-out-alt"></i>Déconnexion</a></li>
            	<?php
					if (isset($_GET["deco"])) 
					{
						session_destroy();
						header("Location: vueAccueil.php");
					}
            	?>
            </form>
          </ul>
        </div>
    </div>

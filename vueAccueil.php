<?php 
include("EnTete/enteteHaut.php");
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
<center>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <h3 class="heading">Accueil</h3>
    </div>
    <ul class="nospace group center">
      <li class="one_third first">
        <article style="color: black;"><a class="inverse" href="vueAchatNC.php"><i class="btmspace-30 icon fa fa-expand"></i></a>
          <h6 class="heading font-x1">Remplacer une pièce défectueux ou manquante</h6>
          <p>Nous dispositions toutes pièces électroniques et mécaniques de tous les constructeurs automobiles &hellip;</p>
          <footer><a href="vueAchatNC.php">Choisir une pièce &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article style="color: black;"><a class="inverse" href="" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="btmspace-30 icon fa fa-headphones"></i></a>
          <h6 class="heading font-x1">Un conseillé technique sera à votre disposition</h6>
          <p>Notre service clientèle est disponible tous les jours de 8H - 19h &hellip;</p>
          <footer><a href="" data-toggle="modal" data-target=".bd-example-modal-lg">Contacter nous &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article style="color: black;"><a class="inverse" href="#"><i class="btmspace-30 icon fa fa-history"></i></a>
          <h6 class="heading font-x1">Avez-vous une question ?</h6>
          <p>Vous cherchez des reponses ? Veuillez voir notre section FAQ &hellip;</p>
          <footer><a href="vueFaq.php">Section FAQ &raquo;</a></footer>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded" style="background-image:url('Images/intro4.jpg');">
  <div class="hoc split clear">
    <section> 
      <!-- ################################################################################################ -->
      <h2 class="heading">Nos avantages</h2>
      <p class="btmspace-50">Des pièces de grandes qualités obtenu depuis le monde entier</p>
      <article><!-- <a href="vueApropos.php"><i class="icon fa fa-expand"></i></a> --> <!-- bouton pour vue a propos -->
        <h6 class="heading font-x1">Un service client opérationnel</h6>
        <p>Vous avez un service qui respond à toutes vos besoins &hellip;</p>
      </article>
      <article><!-- <a href="vueAchatNC.php"><i class="icon fa fa-object-ungroup"></i></a --> <!-- bouton pour vue achat -->
        <h6 class="heading font-x1">Des produits de qualités</h6>
        <p>Vous avez à votre disposition des produits automobiles &hellip;</p>
      </article>
      <article><!-- <a href="#"><i class="icon fa fa-signing"></i></a> -->
        <h6 class="heading font-x1">Une commande envoyé sous moins de 24 heures</h6>
        <p>Votre commande sera expédier rapidement sous un délai de 24 heures après votre achat &hellip;</p>
      </article>
      <!-- ################################################################################################ -->
    </section>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <article class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h3 class="heading font-x2">Pourquoi acheter chez FILELEC ?</h3>
    </div>
    <div class="three_quarter">
      <p class="nospace btmspace-30">Nous vendons des produits aux clients avec satisfactions ou remboursement. Nous essayons de faire le maximum pour vous proposer les nouveautés ainsi que des promotions. Toutes les transactions bancaires sont assurés et le système anti-fraude nous permet de détecter les utilisations frauduleuses d’une carte bancaire. Nous prenons le plus grand soin pour l’emballage des produits et la préparation des commandes.</p>
      <ul class="nospace group stats">
        <li><i style="color: black;" class="fa fa-3x fa-user-secret"></i>
          <p style="color:black" >2345</p>
          <p style="color:black" >Clients</p>
        </li>
        <li><i style="color: black;" class="fa fa-3x fa-ils"></i>
          <p style="color:black" >1234</p>
          <p style="color:black" >Visiteurs par mois</p>
        </li>
        <li><i style="color: black;" class="fa fa-3x fa-fire"></i>
          <p style="color:black" >23450</p>
          <p style="color:black" >Ventes totales</p>
        </li>
        <li><i style="color: black;" class="fa fa-3x fa-crosshairs"></i>
          <p style="color:black" >100 %</p>
          <p style="color:black" >Fiabilité</p>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </article>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <img class="" style="width: 100%" src="Images/service_client/header_modal.png">

        <form method="post" action="/Home">

          <div class="row">
            <div class="col">
                <div class="p-3">
                    <p class="font-weight-bold">Demandez à être rappelé.</p>
                    <p class="font-weight-bold">+00 (123) 248 9812</p>
                </div>
                <div class="p-3">
<!--                     <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Téléphone">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <p class="font-weight-bold">SAV : filelec-sav@filelec.com</p>
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <p class="font-weight-bold">Gérez vos commandes, configurez ou faites évoluer votre contrat.</p>
                </div>
            </div>
          </div>

            <div class="row">
                <div class="col">
                    <div class="p-3">
                        <!-- <button type="submit" class="btn btn-primary" name="bouton" value="ok" onclick="return confirm('Confirmez-vous la demande de rappel ?')">Envoyez une demande</button> -->
                    </div>
                </div>

                <div class="col">
                    <div class="p-3">
                        <a href="">Assistance en ligne <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>

                <div class="col">
                    <div class="p-3">
                        <a href="vueConnexion.php">Espace client <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </form>
        <img class="" style="width: 100%" src="Images/service_client/footer_modal.png"/>
    </div>
  </div>
</div>

<?php 
include("EnTete/enteteBas.php");
?>

</center>
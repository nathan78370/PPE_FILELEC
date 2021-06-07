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

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contactez nous.
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Entrez votre nom" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Adresse Mail</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Entrez votre mail" required>
                            <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                            <button type="submit" class="btn btn-primary text-right">Envoyer</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Addresse</div>
                <div class="card-body">
                    <p>6-8 Impasse des 2 Cousins</p>
                    <p>75017 PARIS</p>
                    <p>France</p>
                    <p>Email : filelec.contact.service@gmail.com</p>
                    <p>Tel. +33 00 00 00 00</p>

                </div>

            </div>
        </div>
    </div>
</div>


<?php
include("EnTete/enteteBas.php");
?>

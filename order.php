<?=template_header('Place Order')?>
<form action ="orderv.php"method="post"></a>
                                <center><h1>LIVRAISON</h1></center>
                        <center><label for="DateLivraison">
                            <i class="fas fa-truck"></i>
                        </label>
                            <input type="date" class="form-control" id="date" name="DateLivraison" value=""
                                   placeholder="Renseignez une date de livraison"></center>
                                        <br/>
                        <center><label for="Adresse">
                        	<i class="fas fa-home"></i>
                            <input type="text" class="form-control" id="name" name="Adresse" value=""
                                   placeholder="Renseignez une adresse de livraison"></center>
                                   <br/>
                                <center> <a href="placeorder.php"><input type="submit" value="Valider" name="Valider"></a>
								</input></center>
<?=template_footer()?>
<?php unset($_SESSION['cart']); ?>
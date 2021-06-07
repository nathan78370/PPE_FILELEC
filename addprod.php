<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ajout d'un produit</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="style.css" rel="stylesheet" type="text/css">
        <a href="Admin.html"><button class="retour" style="background: #4e5c70;border: 0;color: #FFFFFF;width: 100px;padding: 12px 0;text-transform: uppercase;font-size: 14px;font-weight: <b></b>old;border-radius: 5px;cursor: pointer;">Retour</button></a>
    </head>
    <body>
    <div class="login">
    <h1>Ajouter produit</h1>
 <form action ="FonctionsPHP/addprodv.php"method="post">

                                    <input type="text" class="form-control" id="NomE" name="NomE" value=""
                                        placeholder="Nom du produit">
                               
                                    <input type="text" class="form-control" id="Descr" name="Descr" value=""
                                        placeholder="Description">
                                       
                                    <input type="number" step="any" class="form-control" id="Prix" name="Prix" value=""
                                        placeholder="Prix">

                                    <input type="number" class="form-control" id="QteE" name="QteE" value=""
                                        placeholder="Quantité">

                                    <input type="text" class="form-control" id="Image" name="Image" value=""
                                        placeholder="Image">

                                    <input type="text" class="form-control" id="DateCrea" name="DateCrea" value=""
                                        placeholder="DateCrea">

                                     <input type="number" step="any" class="form-control" id="idB" name="idB" value=""
                                       placeholder="idB">

                                    <input type="number" step="any" class="form-control" id="idT" name="idT" value=""
                                      placeholder="idT">

                                
                                    <input type="submit" value="Valider" name="Valider" >
</input>
                                    </form>
        </div>
    </body>
</html>


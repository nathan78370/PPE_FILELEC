<?php
@$description=$_POST["description"];
@$libelle=$_POST["libelle"];
@$price=$_POST["price"];
@$valider=$_POST["valider"];
$message="";
if(isset($valider)){
    if(empty($description)) $message="<li>Prenom invalide!</li>";
    if(empty($libelle)) $message.="<li>Nom invalide!</li>";
    if(empty($price)) $message.="<li>Email invalide!</li>";
    if(empty($message)){
        include("login.php");
        $req=$pdo->prepare("select id from products where libelle=? limit 1");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute(array($libelle));
        $tab=$req->fetchAll();
        if(count($tab)>0)
            $message="<li>Le produit existe déja!</li>";
        else{
            $ins=$pdo->prepare("insert into products(description,libelle,price) values(?,?,?)");
            $ins->execute(array($description,$libelle,$price));
        }
    }
}
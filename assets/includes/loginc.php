<?php
session_start();
@$email=$_POST["email"];
@$password=$_POST["password"];
@$valider=$_POST["valider"];
$message="";
if(isset($valider)){
    include("./assets/includes/functions.php");
    $res=$pdo->prepare("select * from accounts where email=? and password=? limit 1");
    $res->setFetchMode(PDO::FETCH_ASSOC);
    $res->execute(array($email,md5($password)));
    $tab=$res->fetchAll();
    if(count($tab)==0)
        $message="<li>Mauvais Email ou mot de passe!</li>";
    else{
        $_SESSION["autoriser"]="oui";
        $_SESSION["nomPrenom"]=strtoupper($tab[0]["prenom"]." ".$tab[0]["nom"]);
        header("location:profil.php");
    }
}

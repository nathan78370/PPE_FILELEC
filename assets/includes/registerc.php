<?php
@$prenom=$_POST["prenom"];
@$nom=$_POST["nom"];
@$email=$_POST["email"];
@$telephone=$_POST["telephone"];
@$Ville=$_POST["Ville"];
@$CodePOSTAL=$_POST["CodePOSTAL"];
@$adresse=$_POST["adresse"];
@$password=$_POST["password"];
@$repassword=$_POST["repassword"];
@$valider=$_POST["valider"];
$message="";
if(isset($valider)){
    if(empty($prenom)) $message="<li>Prenom invalide!</li>";
    if(empty($nom)) $message.="<li>Nom invalide!</li>";
    if(empty($email)) $message.="<li>Email invalide!</li>";
    if(empty($telephone)) $message.="<li>Téléphone invalide!</li>";
    if(empty($Ville)) $message.="<li>Ville invalide!</li>";
    if(empty($CodePOSTAL)) $message.="<li>CP invalide!</li>";
    if(empty($adresse)) $message.="<li>Adresse invalide!</li>";
    if(empty($password)) $message.="<li>Mot de passe invalide!</li>";
    if($password!=$repassword) $message.="<li>Mots de passe non identiques!</li>";
    if(empty($message)){
        include("login.php");
        $req=$pdo->prepare("select id from accounts where email=? limit 1");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute(array($email));
        $tab=$req->fetchAll();
        if(count($tab)>0)
            $message="<li>Login existe déjà!</li>";
        else{
            $ins=$pdo->prepare("insert into accounts(date,prenom,nom,email,telephone,Ville,CodePOSTAL,adresse,password) values(now(),?,?,?,?,?,?,?,?)");
            $ins->execute(array($prenom,$nom,$email,$telephone,$Ville,$CodePOSTAL,$adresse,md5($password)));
            header("location:./profil.php");
        }
    }
}
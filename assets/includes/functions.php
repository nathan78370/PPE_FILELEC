<?php
try{
    $pdo=new PDO("mysql:host=localhost;dbname=filelec","root","");
}
catch(PDOException $e){
    echo $e->getMessage();
}


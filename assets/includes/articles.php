<?php ob_start();
?>
<?php
$dsn = 'mysql:host=localhost;dbname=filelec';
$user = 'root';
$password = '';

$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
);

try {
    $pdo = new PDO($dsn, $user, $password, $option);
} catch (PDOException $e){
    echo 'Connexion échouée : ' . $e->getMessage();
}

    $req = "select * from products";
    $stmt = $pdo->prepare($req);
    $stmt->execute();
    $cours = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach ($cours as $c) : ?>
<div class="class="card" style="width: 13rem;">
    <div class="card" style="#">
        <img class="card-img-top" src="<?= $c['img'] ?>" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title"><a href="product.html" title="View Product"><?= $c['libelle'] ?></a></h4>
            <p class="card-text"><?= $c['description'] ?></p>
            <div class="justify-content-md-center">
                <div class="col">
                    <p class="btn btn-danger btn-block"><?= $c['price'] ?>€</p>
                </div>
                <div class="col">
                    <a href="cart.html" class="btn btn-success btn-block">Add to cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

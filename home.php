<?php
ini_set('display_errors', 'off');
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Page d'accueil</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body class="loggedin">
    <nav class="navtop">
        <div>
            <h1>FileElec Store</h1>
            <a href="AdminLoggin.html"><i class="fas fa-users-cog"></i>Bureau d'administration</a>
            <a href="index.php"><i class="fas fa-store"></i>Boutique</a>
            <a href="profile.php"><i class="fas fa-user-circle"></i>Profil</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Déconexion</a>
        </div>
    </nav>
    <div class="content">
        <h2>Accueil</h2>
        <p>Bienvenue, <?=$_SESSION['name']?> !</p>
        <?php
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
        <?=template_header('Home')?>
        <div class="featured">
            <h2>Boutique</h2>
            <p>FilElec Store</p>
        </div>
        <div class="recentlyadded content-wrapper">
            <center>
                <h2>Notre catalogue</h2>
            </center>
            <div class="products">
                <?php foreach ($recently_added_products as $product): ?>
                <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
                    <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
                    <span class="name"><?=$product['name']?></span>
                    <span class="price">
                        &euro;<?=$product['price']?>
                        <?php if ($product['rrp'] > 0): ?>
                        <span class="rrp">&euro;<?=$product['rrp']?></span>
                        <?php endif; ?>
                    </span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

        <?=template_footer()?>
    </div>
</body>

</html>
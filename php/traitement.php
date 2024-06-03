
Conversation ouverte. 1 message non lu.

Aller au contenu
Utiliser Gmail avec un lecteur d'écran
1 sur 157
php
Boîte de réception
Laury R <renaulaury@gmail.com>
	
Pièces jointes19:05 (il y a 33 minutes)
	
À moi

 3 pièces jointes  • Analyse effectuée par Gmail
	

<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Panier</title>
</head>
<body>
<h1>Récapitulatif de votre commande</h1>
<ul>
    <?php 
    /*if(isset($_POST["Commander"])){
        echo "<h1>Récapitulatif de votre commande<h1>
    } else {
    "<h1>Votre Panier est vide</h1>";
}*/

$commande = array();
$compteurCde = 0;


foreach ($_SESSION['panier'] as $article) {
    if (isset($commande[$article])) {
        $commande[$article]++;
    } else {
        $commande[$article] = 1;
    }
}
var_dump($commande);


foreach ($commande as $article => $nbArticles) {    
    $compteurCde++;
    echo "<li>Article $compteurCde : N°$nbArticles x $article </li>";    
}
echo "</ul>"; 


    ?>

</body>
</html>

commande.php
Affichage de commande.php en cours...
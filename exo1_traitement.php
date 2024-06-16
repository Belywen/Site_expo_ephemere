<?php
session_start();

// Initialisation du tableau associatif pour stocker les articles et leur quantité
$commande = array();

// Parcours du panier pour compter les occurrences de chaque article
if (empty($_SESSION['panier'])) {
    echo "<h1>Votre Panier est vide</h1>";
} else {
    foreach ($_SESSION['panier'] as $article) {
        if (isset($commande[$article])) {
            $commande[$article]++;
        } else {
            $commande[$article] = 1;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Récapitulatif de commande</title>
</head>
<body>
    <h1>Récapitulatif de commande :</h1>
    <ul>
        <?php 
        // Affichage de chaque article avec son nombre d'occurrences
        $compteurCde = 1;
        foreach ($commande as $article => $nbArticles) {
            echo "<li>Article N°$compteurCde : $nbArticles x $article</li>";
            $compteurCde++;
        }
        ?>
    </ul>
</body>
</html>


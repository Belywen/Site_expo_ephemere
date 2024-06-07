<?php
    session_start();
?>

<?php 
    
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


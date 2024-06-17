
<?php
    session_start();

    //Initialisation tableau de commande si ce n'est pas déjà fait
    if (!isset($_SESSION["commande"])) {
        $_SESSION["commande"] = [];
    }

    //Récupération des infos des boutons ajouter
    if (isset($_POST["ticketAdult"])) {
        $_SESSION["commande"][] = "Ticket adulte";
    } else if (isset($_POST["ticketEnfant"])) {
        $_SESSION["commande"][] = "Ticket enfant";
    } 

    if (empty($_SESSION["commande"])) {
        echo "Aucune commande en cours";
    } else {
        echo "<h1>Commande</h1>";
        echo "<ul>";
        $compteurCommande = 0;
        foreach ($_SESSION["commande"] as $ticket) {
            $compteurCommande++;
            echo "<li>$compteurCommande $ticket</li>";
        }
        echo "</ul>";
    }
?>

<?php
    session_start();

    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = [];
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styles_gen.css" rel="stylesheet">
    <link href="../css/styles_gen_others.css" rel="stylesheet">
    <link href="../css/styles_tickets.css" rel="stylesheet">
    <script src="../js/script_burger.js" defer></script>
    <title>Cinéma Production</title>
</head>

<body>
    <header>
        <nav id="navbar">      
            <div class="burger_button">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>

            <ul>
                <li><a href="../index.html">Accueil</a></li>               
                <li><a href="./localisation.html">Nous trouver</a></li>
                <li><a href="./events23.html">Evenements 2023</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>

        <div id="blockLogo">
            <img id="logo" src="../images/logo.png">                
        </div>
        
        <div id="blockPanier">
            <a href="./panier.html">
                <img id="panier" src="../images/panier.png">
            </a>
        </div>
    </header>

    <main>
        <section class="blockPrinc">
            <div class="bande">
            </div>
            <h1>Tickets</h1>
        </section>      
        
        <section class="block blocTickets">
            <h2>Exposition du 09 septembre 2024</h2>
            <div class="vente_tickets">
                <form action="tickets.php" method="post">
                    <div class="formTickets">
                        <div class="label_tickets">
                            <label for="adult">Ticket adulte : <span class="prix">10 €</span></label>
                            <p class="miniBande"></p>
                            <img src="../images/tickets/ticket_adult.jpg" alt="Image du billet adulte">
                        </div>
                        <input id="adult" class="btnAjouter" type="submit" name="ticketAdult" value="Ajouter">
                    </div>

                    <div class="formTickets">
                        <div class="label_tickets">
                            <label for="child">Ticket enfant +6ans : <span class="prix">8 €</span></label>
                            <p class="miniBande"></p>
                            <img src="../images/tickets/ticket_enfant.jpg" alt="Image du billet enfant">
                        </div>                    
                        <input id="child" class="btnAjouter" type="submit" name="ticketEnfant" value="Ajouter">                    
                    </div>
                </form>
            </div>

           
            <?php                
                if (isset($_POST['ticketAdult']) && isset($_POST['adult'])) {
                    $_SESSION['panier'][] = $_POST['adult'];
                }
                
                if (isset($_POST['ticketEnfant']) && isset($_POST['child'])) {
                    $_SESSION['panier'][] = $_POST['child'];
                }      
                
                var_dump($_SESSION['panier']);

                if (isset($_SESSION['panier'])) {
                    echo "<h1>Papapanier : </h1>";
                    echo "<ul>";
                    foreach ($_SESSION['panier'] as $ticket) {
                        echo "<li> Ticket $ticket </li>";
                    }
                    echo "</ul>";
                }
    
            ?>
        </section>
    </main>

    <footer>
        <div class="rzo">
            <h2>Nous suivre :</h2>
            <div class="footImg">
                <a href="http://www.facebook.com"><img src="../images/icones/fbk.png"></a>
                <a href="http://www.instagram.com"><img src="../images/icones/insta.png"></a>
                <a href="http://www.twitter.com"><img src="../images/icones/x.png"></a>
            </div>
        </div>
    </footer>
</body>

</html>
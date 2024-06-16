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
            <div id="blockLogo">
                <img id="logo" src="../images/logo.png">
            </div>

            <div class="burger_button">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>

            <ul>
                <li><a href="../index.html">Accueil</a></li>      
                <li><a href="localisation.html">Nous trouver</a></li>                            
                <li><a href="events23.html">Evenements 2023</a></li>                  
                <li><a href="contact.html">Nous contacter</a></li> 
            </ul>
        </nav>
    </header>

    <main>
        <section class="blockPrinc">
            <div class="bande">
            </div>
            <h1>Tickets</h1>
        </section>      
        
        <section class="block">
            <h2>Panier</h2>
            <!--<h1>Votre panier est vide</h1>
            <a href='../tickets.html'>Commander un ticket</a>"-->

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
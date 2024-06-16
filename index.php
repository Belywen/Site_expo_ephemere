<?php
session_start();

// Vérification et ajout d'un article au panier
if (isset($_POST['Ajouter'], $_POST['matos']) && $_POST['matos'] != "--Matos en stock--") {
    $_SESSION['panier'][] = $_POST['matos'];
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="index.php" method="post">
            <label for="matos">Composants informatiques :</label>
            <select name="matos" id="matos">
                <option selected="selected">--Matos en stock--</option>

                <!-- Tableau simple -->

                <?php /*
                $materiel = array("Clé USB", "Cable de ouf", "Ecran de Captain Gaming"); 
                foreach($materiel as $value){
                    echo "<option value='$value'>$value</option>";
                }*/
                ?>

                <!-- Tableau associatif -->

                <?php
                $materiel = array(
                    "Clé USB" => "Clé USB",
                    "Cable de ouf" => "Cable de ouf",
                    "Ecran de Captain Gaming" => "Ecran de Captain Gaming",
                    "Mémoire de Dory" => "Mémoire de Dory",
                    "Multipass" => "Multipass",
                );

                foreach ($materiel as $key => $value) {
                    echo "<option value='$value'>$value</option>";
                }
                ?>            
            </select>
            <input type="submit" name="Ajouter" value="Ajouter">         
            
        </form>
        <form action="traitement.php" method="post">
            <input type="submit" value="Commander">
        </form>
    <div>

        <?php
            if (empty($_SESSION['panier'])) {
                echo "<h1>Votre Panier est vide</h1>";
            } else {
                echo "<h1>Votre Panier de ticket:</h1>";
                echo "<ul>";
                $compteurPanier = 0;
                foreach ($_SESSION['panier'] as $article) {
                    $compteurPanier++;
                    echo "<li>Article N° $compteurPanier : $article</li>";
                }
                echo "</ul>";
            }
            ?>

        </div>
    </div>
</body>
</html>

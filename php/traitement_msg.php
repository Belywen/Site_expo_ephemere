<?php
// Récupération des données du formulaire
$name = htmlspecialchars(trim($_POST['name']));
$firstName = htmlspecialchars(trim($_POST['firstName']));
$email = htmlspecialchars(trim($_POST['email']));
$message = htmlspecialchars(trim($_POST['textarea']));

// Validation des champs
if (!empty($name) && !empty($firstName) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Destinataire de l'email
    $to = "votre-adresse-email@example.com"; // Remplacez par votre adresse e-mail

    // Sujet de l'email
    $subject = "Nouveau message de $firstName $name";

    // Contenu de l'email
    $emailContent = "
    Nom: $name\n
    Prénom: $firstName\n
    Email: $email\n
    Message:\n$message
    ";

    // En-têtes de l'email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Envoi de l'email
    if (mail($to, $subject, $emailContent, $headers)) {
        echo "Merci pour votre message. Il a été envoyé avec succès.";
    } else {
        echo "Désolé, une erreur s'est produite. Veuillez réessayer plus tard.";
    }
} else {
    echo "Veuillez remplir tous les champs correctement.";
}
?>

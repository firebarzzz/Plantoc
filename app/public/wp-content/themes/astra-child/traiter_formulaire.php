<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST['your-name']);
    $email = htmlspecialchars($_POST['your-email']);
    $message = htmlspecialchars($_POST['your-message']);

    // Destinataire
    $destinataire = 'planty.drinks@gmail.com';
    
    // Sujet
    $sujet = 'Nouveau message de contact';
    
    // Corps de l'e-mail
    $corps = "Nom: $nom\n";
    $corps .= "E-mail: $email\n\n";
    $corps .= "Message:\n$message\n";

    // En-têtes de l'e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoi de l'e-mail
    if (mail($destinataire, $sujet, $corps, $headers)) {
        echo "L'e-mail a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de l'e-mail.";
    }
} else {
    echo "Méthode de requête non autorisée.";
}
?>
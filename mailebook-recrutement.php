<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // récupérer les données du formulaire
    $email = $_POST['email'];
    
    $prenom = $_POST['prenom'];
    
    $nom = $_POST['nom'];
   
    $telephone = $_POST['telephone'];
    
    $qui = $_POST['qui'];

    // construire le corps du message
    $body = "Email : $email\n";
    $body .= "Prénom : $prenom\n";
    $body .= "Nom : $nom\n";
    $body .= "Téléphone : $telephone\n\n";
    $body .= "La personne est un : $qui\n\n";

    // envoyer l'email
    $to = 'goudemand.lucas@gmail.com, mss@open-skills-rh.fr';
    
    $subject = "NOUVEAU LEAD " . $prenom . $nom . " vient de telecharger l'ebook PERFECT MATCH";
    $headers = "Content-Type: text/plain; charset=utf-8\r\n";
    $headers = "From: contact@open-skills-rh.fr\r\n";

    mail($to, $subject, $body, $headers);
    
     // afficher le message de confirmation et le lien vers le site web
     header('Location: https://open-skills-rh.fr/download/perfect.pdf');
    exit;
    
}

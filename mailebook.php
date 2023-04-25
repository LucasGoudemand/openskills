<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // récupérer les données du formulaire
    $email = $_POST['email'];
    
    $prenom = $_POST['prenom'];
    
    $nom = $_POST['nom'];
   
    $telephone = $_POST['telephone'];
    
    

    // construire le corps du message
    $body = "Email : $email\n";
    $body .= "Prénom : $prenom\n";
    $body .= "Nom : $nom\n";
    $body .= "Téléphone : $telephone\n\n";

    // envoyer l'email
    $to = 'goudemand.lucas@gmail.com, mss@open-skills-rh.fr';
    
    $subject = "NOUVEAU LEAD " . $prenom . $nom . " vient de telecharger l'ebook Livre Open Skills RH";
    $headers = "Content-Type: text/plain; charset=utf-8\r\n";
    $headers = "From: contact@open-skills-rh.fr\r\n";

    mail($to, $subject, $body, $headers);
    
     // afficher le message de confirmation et le lien vers le site web
     header('Location: https://open-skills-rh.fr/download/OPEN%20SKILLS%20RH%20LIVRE.pdf');
    exit;
    
}

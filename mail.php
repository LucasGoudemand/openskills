<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // récupérer les données du formulaire
    $email = $_POST['email'];
    
    $prenom = $_POST['prenom'];
    
    $nom = $_POST['nom'];
   
    $telephone = $_POST['telephone'];
    
    $message = $_POST['message'];
    

    // construire le corps du message
    $body = "Email : $email\n";
    $body .= "Prénom : $prenom\n";
    $body .= "Nom : $nom\n";
    $body .= "Téléphone : $telephone\n\n";
    $body .= "Message : \n$message\n";

    // envoyer l'email
    $to = 'goudemand.lucas@gmail.com, mss@open-skills-rh.fr';
    
    $subject = "(PROFESSIONNEL) " . $prenom . $nom . " vient de remplire le formulaire";
    $headers = "Content-Type: text/plain; charset=utf-8\r\n";
    $headers = "From: contact@open-skills-rh.fr\r\n";

    mail($to, $subject, $body, $headers);

     // afficher le message de confirmation et le lien vers le site web
     header('Refresh: 5; URL=https://open-skills-rh.fr/');
        
     echo '<div style="text-align: center;display:flex;justify-content:center;align-items:center;flex-direction:column;height:100%;width:100%">';
     echo '<p>Votre message a été envoyé avec succès. Vous serez redirigé automatiquement vers la page d\'accueil dans 5 secondes.</p>';
     echo '<a href="https://open-skills-rh.fr/">Sinon vous pouvez cliquer ici pour retourner au site web OPEN SKILLS RH</a>';
     echo '</div>';
}

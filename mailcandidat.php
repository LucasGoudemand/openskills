<?php
if(isset($_POST['submit'])) {

    // recipient email address
    $to = 'goudemand.lucas@gmail.com, mss@open-skills-rh.fr';

    // sender's name
    $name = $_POST['prenom'] . " " . $_POST['nom'];
     // subject of the email
     $subject = "(CANDIDAT) " . $name . " vient de remplire le formulaire";

    // message body
    $message = "Nom complet: " . $name . "\r\n";
    $message .= "Email: " . $_POST['email'] . "\r\n";
    $message .= "Téléphone: " . $_POST['telephone'] . "\r\n";
    $message .= "Type de poste: " . $_POST['contrat'] . "\r\n";
    $message .= "Intitulé de poste: " . $_POST['poste'] . "\r\n";
    $message .= "Région: " . $_POST['region'] . "\r\n";
    $message .= "Critère de recherche: " . $_POST['critere'] . "\r\n";

    // attachment
    if(isset($_FILES['cv']) && $_FILES['cv']['error'] == 0){
        $filename = $_FILES['cv']['name'];
        $filepath = $_FILES['cv']['tmp_name'];
        $filetype = $_FILES['cv']['type'];
        $filesize = $_FILES['cv']['size'];

        $handle = fopen($filepath, "r");
        $content = fread($handle, $filesize);
        fclose($handle);

        $content = chunk_split(base64_encode($content));

        // generate a random boundary
        $boundary = md5(time());

        // email header
        $headers = "From: contact@open-skills-rh.fr\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"" . $boundary . "\"\r\n\r\n";

        // message body
        $message = "--" . $boundary . "\r\n";
        $message .= "Content-Type: text/plain; charset=\"iso-8859-1\"\r\n";
        $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $message .= $message . "\r\n\r\n";
        $message .= "Nom complet: " . $name . "\r\n";
        $message .= "Email: " . $_POST['email'] . "\r\n";
        $message .= "Téléphone: " . $_POST['telephone'] . "\r\n";
        $message .= "Type de poste: " . $_POST['contrat'] . "\r\n";
        $message .= "Intitulé de poste: " . $_POST['poste'] . "\r\n";
        $message .= "Région: " . $_POST['region'] . "\r\n";
        $message .= "Critère de recherche: " . $_POST['critere'] . "\r\n";

        // attachment
        $message .= "--" . $boundary . "\r\n";
        $message .= "Content-Type: " . $filetype . "; name=\"" . $filename . "\"\r\n";
        $message .= "Content-Disposition: attachment; filename=\"" . $filename . "\"\r\n";
        $message .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $message .= $content . "\r\n\r\n";
        $message .= "--" . $boundary . "--";
    } else {
        // email header
        $headers = "From: contact@open-skills-rh.fr\r\n";
        
    }

    // send email
    if(mail($to, $subject, $message, $headers)) {
        // afficher le message de confirmation et le lien vers le site web
    header('Refresh: 5; URL=https://open-skills-rh.fr/');
    echo '<div style="text-align: center;display:flex;justify-content:center;align-items:center;flex-direction:column;height:100%;width:100%">';
    echo '<p>Votre message a été envoyé avec succès. Vous serez redirigé automatiquement vers la page d\'accueil dans 5 secondes.</p>';
    echo '<a href="https://open-skills-rh.fr/">Sinon vous pouvez cliquer ici pour retourner au site web OPEN SKILLS RH</a>';
    echo '</div>';
    } else {
        header('Refresh: 5; URL=https://open-skills-rh.fr/');
    echo '<div style="text-align: center;display:flex;justify-content:center;align-items:center;flex-direction:column;height:100%;width:100%">';
    echo '<p>Votre message n"a pas été envoyé. Vous serez redirigé automatiquement vers la page d\'accueil dans 5 secondes.</p>';
    echo '<a href="https://open-skills-rh.fr/">Sinon vous pouvez cliquer ici pour retourner au site web OPEN SKILLS RH</a>';
    echo '</div>';
    }
}
?>
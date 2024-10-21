<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Paramètres du serveur
    $mail->isSMTP();
    $mail->Host = 'root'; // Remplacez par votre serveur SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'anjgroup2019@gmail.com'; // Remplacez par votre adresse email
    $mail->Password = ''; // Remplacez par votre mot de passe
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Destinataires
    $mail->setFrom('votre_email@example.com', 'Votre Nom');
    $mail->addAddress('destinataire@example.com', 'Nom du Destinataire');

    // Contenu
    $mail->isHTML(true);
    $mail->Subject = 'Voici le sujet';
    $mail->Body    = 'Ceci est le corps du message en <b>HTML</b>';
    $mail->AltBody = 'Ceci est le corps du message en texte brut pour les clients email qui ne supportent pas le HTML';

    $mail->send();
    echo 'Le message a été envoyé';
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Erreur Mailer : {$mail->ErrorInfo}";
}
?>
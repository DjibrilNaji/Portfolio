<?php

$mail=$_POST['email'];

$to = $mail; // Pour la ou on veut envoyer le mail 

$subject  = $_POST['subject']; // Pour le sujet du mail 

$message=$_POST['message'];

$headers  = 'From: ' . $mail . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';

if(mail($to, $subject, $message, $headers))
    echo "Votre message a bien été envoyé";
else
    echo "Une erreur est survenue lors de l'envoi";
?>
<?php

$servname = 'sio-hautil.eu';
$dbname = 'najid';
$user = 'najid';
$pass = 'Djibs785';

try {
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $name = $_POST["name"];
        $message = $_POST["message"];

        if (!isset($message)) {
            die("S'il vous plaît entrez votre nom");
        }
        $sql = "insert into portfolio_avis (nom,email,message) values ('$name','$email','$message')";

        $dbco->exec($sql);
        print "Salut " . $name . "!, votre adresse e-mail est \n". $email . "Voici l'avis que vous nous avez donner " . $message;

    }
} catch
(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
// Vérifie qu'il provient d'un formulaire


<?php

$empfaenger = "j.f.bizueque@gmail.com";

$name = $_POST['name'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$nachricht = $_POST['nachricht'];

$betreff = "Neue Formular Nachricht";

$text = "
Name: $name

E-Mail: $email

Telefon: $telefon

Nachricht:
$nachricht
";

$header = "From: $email";

if(mail($empfaenger, $betreff, $text, $header)) {
    echo "Nachricht erfolgreich gesendet!";
} else {
    echo "Fehler beim Senden.";
}

?>

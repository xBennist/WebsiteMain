<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $message = $_POST['message'];
        $to = "benst2018@gmail.com";
        $subject = "Neue Kontaktanfrage";
        $body = "Name: $name\nEmail: $email\nLand: $country\nNachricht: $message";
        if(mail($to, $subject, $body)){
            echo "Nachricht erfolgreich gesendet.";
        } else {
            echo "Fehler beim Senden der Nachricht.";
        }
    }
    ?>
<?php

// Replace this with your own email address
$siteOwnersEmail = 'user@website.com';


if (isset($_POST['enviar'])) {
// Create the Variable's
    if(!empty($_POST['contactName']) && !empty($_POST['contactEmail']) && !empty($_POST ['contactSubject'] && !empty($_POST['contactMessage']))) {
        $name = $_POST['contactName'];
        $email = $_POST['contactEmail'];
        $subject =  $_POST['contactSubject'];
        $contact_message = $_POST['contactMessage'];
        $header = "From: noreply@example.com" . "\r\n";
        $header. = "Reply-to: noreply@example.com" . "\r\n";
        $header. = "X-Mailer: PHP/" . phpversion();
        $mail = @mail($name,$email,$subject,$contact_message,$header);
        if ($mail) {
            echo "<h4>¡Mail Enviado Correctamente!</h4>";
        }
    }
    }
?>
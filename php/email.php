<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data form 
    $email = $_POST['email'];

    // Send email notification
    $to = 'enea.marian@proton.me';
    $subject = 'Contact Form Submission';
    $message = "E-Mail: $email";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo 'Vielen Dank für ihr Abonnement!';
    } else {
        echo 'Oops! Ein Fehler ist aufgetreten. Bitte versuchen Sie es später noch einmal.';
    }
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data form 
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $nachricht = $_POST['nachricht'];

    // Send email notification
    $to = 'enea.marian@proton.me';
    $subject = 'Contact Form Submission';
    $message = "Vorname: $vorname\n"
             . "Nachname: $nachname\n"
             . "E-Mail: $email\n"
             . "Telephone: $telephone\n"
             . "Nachricht: $nachricht\n";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo 'Vielen Dank für ihr Abonnement!';
    } else {
        echo 'Oops! Ein Fehler ist aufgetreten. Bitte versuchen Sie es später noch einmal.';
    }
}
?>

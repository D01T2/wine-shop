<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $nachricht = $_POST['nachricht'];

    // You can perform additional validation or data processing here

    // Send email notification
    $to = 'your-email@example.com';
    $subject = 'Contact Form Submission';
    $message = "Vorname: $vorname\n"
             . "Nachname: $nachname\n"
             . "E-Mail: $email\n"
             . "Telephone: $telephone\n"
             . "Nachricht: $nachricht\n";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo 'Thank you for your submission!';
    } else {
        echo 'Oops! An error occurred. Please try again later.';
    }
}
?>

<?php

require '../processors/send-email.php';

// session_start();
$redirect_location = "/become-a-volunteer";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['Name']);
    $email = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['Phone']);
    $message = htmlspecialchars($_POST['Message']);
    $verification = isset($_POST['verification']) ? 'Confirmed' : 'Not Confirmed';
    $consent = isset($_POST['consent']) ? 'Given' : 'Not Given';
    
    $areas = isset($_POST['scope']) ? implode(", ", $_POST['scope']) : 'None selected';
    
    $to = "lukman@branderah.com"; // Replace with the target email
    $subject = "New Volunteer Submission";
    $headers = "From: info@blackcellencenetwork.com\r\n"; // Replace with your email
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Areas of Interest: $areas\n";
    $body .= "Message: $message\n";
    $body .= "Verification: $verification\n";
    $body .= "Consent: $consent\n";

    sendEmail($to, $subject, $body, $email, $redirect_location);

} else {
    // Redirect back if accessed directly
    header("Location: $redirect_location");
    exit();
}

?>


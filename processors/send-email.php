<?php

session_start();

require '../env-loader.php';

loadEnv();

$composerHome = getenv('COMPOSER_HOME') . '/vendor/autoload.php';
require $composerHome;

use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

function sendEmail($subject, $body, $reply_to, $redirect_location='/') {
    $mail = new PHPMailer;
    $FROM_EMAIL = getenv('FROM_EMAIL');
    $TO_EMAIL = getenv('TO_EMAIL');
    try {
        $mail->isSMTP();
        $mail->Host = getenv('EMAIL_HOST'); // e.g., smtp.gmail.com
        $mail->Helo = 'blackcellence.com';
        $mail->SMTPAuth = true;
        $mail->Username = getenv('EMAIL_USERNAME'); // 'your-email@example.com' Replace with your email
        $mail->Password = getenv('EMAIL_PASSWORD');   // Replace with your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = getenv('EMAIL_PORT') ?? 587;
        // $mail->SMTPDebug = 2;
        // $mail->Debugoutput = 'error_log';

        $mail->setFrom($FROM_EMAIL, 'Volunteer Request');
        $mail->addAddress($TO_EMAIL);
        $mail->addReplyTo($reply_to);

        $mail->Subject = $subject;
        $mail->Body = $body;

        // $mail->send();
        if ($mail->send()) {
            $_SESSION['success'] = "Thank you for your submission. We will contact you soon.";  // Store success message
            header("Location: $redirect_location");  // Redirect back to the form page
            exit();
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            error_log($mail->ErrorInfo);
            $_SESSION['error'] = "Sorry, there was an error.";  // Store error message
            header("Location: $redirect_location");  // Redirect back to the form page
            exit();
        }
        
        
    } catch (Exception $e) {
        $_SESSION['error'] = "Sorry, there was an error.";  // Store error message
        header("Location: $redirect_location");  // Redirect back to the form page
        exit();
    }
}
?>
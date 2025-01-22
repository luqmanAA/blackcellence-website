<?php
require 'env-loader.php';
loadEnv();

session_start();
$redirect_location = "/contact";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mailchimp API credentials
    $mailchimpAPIKey = getenv('MAILCHIMP_API_KEY');
    $mailchimpAudienceKey = getenv('MAILCHIMP_AUDIENCE_ID');
    $dataCenter = getenv('MAILCHIMP_DC'); // Example: "us6", "us10"

    // Collect and sanitize input data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        die("Error: All fields are required.");
    }

    // Split name into first name and last name
    $nameParts = explode(" ", trim($name), 2); // Split at first space
    $firstName = $nameParts[0]; // First word is first name
    $lastName = isset($nameParts[1]) ? $nameParts[1] : ""; // Remaining is last name

    // Convert email to lowercase and hash it using MD5 (Mailchimp API requirement)
    $subscriberHash = md5(strtolower($email));

    // Mailchimp API URL
    $url = "https://$dataCenter.api.mailchimp.com/3.0/lists/$mailchimpAudienceKey/members/$subscriberHash";

    // Prepare subscriber data
    $data = [
        "email_address" => $email,
        "status" => "subscribed",
        "merge_fields" => [
            "FNAME" => $firstName,
            "LNAME" => $lastName,
            "PHONE" => $phone,
            "MESSAGE" => $message
        ]
    ];

    // Convert data to JSON
    $jsonData = json_encode($data);

    // Initialize cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_USERPWD, "user:$mailchimpAPIKey");
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

    // curl_setopt($ch, CURLOPT_VERBOSE, true);

    // Execute API request
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Process response
    if ($httpCode == 200 || $httpCode == 201) {
        $_SESSION['success'] = "Thank you! Your form has been submitted successfully.";  // Store success message
        header("Location: $redirect_location");  // Redirect back to the form page
        exit();
    } else {
        $_SESSION['error'] = "Error submitting the form.";  // Store error message
        // $errorResponse = json_decode($response, true);
        // $errorMessage = isset($errorResponse['detail']) ? $errorResponse['detail'] : "Unknown error occurred.";
        // error_log("Error: " . $errorMessage);
        header("Location: $redirect_location");  // Redirect back to the form page
        exit();
    }
} else {
    // Redirect back if accessed directly
    header("Location: $redirect_location");
    exit();
}

?>

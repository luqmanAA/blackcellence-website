<?php
// Get the requested URL path
$request_uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// Remove leading and trailing slashes
$request_uri = trim($request_uri, "/");


if (preg_match('/^volunteers\/([a-zA-Z0-9-]+)$/', $request_uri, $matches)) {
    $_GET['member'] = $matches[1];  // Simulate the query parameter for team-member
    include "volunteers/volunteer-member.php";  // Load the volunteer member page dynamically
    exit;
}

if (preg_match('/^blogs\/([a-zA-Z0-9-]+)$/', $request_uri, $matches)) {
    $_GET['post'] = $matches[1];
    include "blogs/post-template.php";
    exit;
}


return false;

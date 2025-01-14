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

if (preg_match('/^news\/([a-zA-Z0-9-]+)$/', $request_uri, $matches)) {
    $_GET['post'] = $matches[1];
    include "news/post-template.php";
    exit;
}

if (preg_match('/^programs\/([a-zA-Z0-9-]+)$/', $request_uri, $matches)) {
    $_GET['program'] = $matches[1];
    include "programs/program-template.php";
    exit;
}

if (preg_match('/^events\/([a-zA-Z0-9-]+)$/', $request_uri, $matches)) {
    $_GET['event'] = $matches[1];
    include "events/single-event.php";
    exit;
}


return false;

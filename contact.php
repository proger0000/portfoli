<?php
// Define headers to handle AJAX requests
header('Content-Type: application/json');

// Collect form data
$fullname = $_POST['fullname'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';
$response = ['success' => false];

// Basic validation
if (empty($fullname) || empty($email) || empty($message)) {
    $response['message'] = 'All fields are required.';
    echo json_encode($response);
    exit;
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['message'] = 'Invalid email format.';
    echo json_encode($response);
    exit;
}

// Email details
$to = 'galenkorp@gmail.com'; // Your email address
$subject = 'New Contact Form Submission';
$emailMessage = "Name: $fullname\n";
$emailMessage .= "Email: $email\n\n";
$emailMessage .= "Message:\n$message";
$headers = 'From: webmaster@yoursite.com' . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Send email
if (mail($to, $subject, $emailMessage, $headers)) {
    $response = [
        'success' => true,
        'message' => 'Your message has been sent successfully.'
    ];
} else {
    $response['message'] = 'Failed to send message. Please try again.';
}

// Return JSON response
echo json_encode($response);
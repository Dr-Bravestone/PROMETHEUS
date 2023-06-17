<?php

use Illuminate\Support\Facades\Auth;

// Get the email and password values from the request
$email = $_POST['email'];
$password = $_POST['password'];

// Attempt to authenticate the user
if (Auth::attempt(['email' => $email, 'password' => $password])) {
    // Authentication successful
    $response = array('success' => true);
} else {
    // Authentication failed
    $response = array('success' => false);
}

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>


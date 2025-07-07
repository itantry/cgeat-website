<?php
function validateLogin($userId, $password) {
    // Sanitize email
    $userId = filter_var($userId, FILTER_SANITIZE_EMAIL);

    // Check if email is provided
    if (empty($userId)) {
        return "Please enter your email address.";
    }

    // Check if password is provided
    if (empty($password)) {
        return "Please enter your password.";
    }

    // Validate email format
    if (!filter_var($userId, FILTER_VALIDATE_EMAIL)) {
        return "Please enter a valid email address.";
    }

    // Simulate user authentication (replace with real authentication logic)
    // For security, do not reveal if the user exists or not
    // In real application, use prepared statements to prevent SQL injection
    return "Invalid email or password. Please try again or contact support@cgeat.org.";
}
?>
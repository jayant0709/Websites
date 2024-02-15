<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = "jaishreepatil80@gmail.com";
    $subject_line = "New Contact Form Submission: $subject";
    $body = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

    $headers = "From: $email";

    if (mail($to, $subject_line, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
} else {
    echo "Error: Invalid request.";
}
?>

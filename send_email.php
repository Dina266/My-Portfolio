<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email recipient and subject
    $to = "denaa2366@gmail.com"; // Replace with your email address
    $email_subject = "Contact Form Submission: " . $subject;

    // Email body
    $email_body = "You have received a new message from the user $name.\n\n" .
                    "Email: $email\n" .
                    "Phone: $phone\n\n" .
                    "Message:\n$message";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    // Handle request method not POST
    echo "Invalid request method.";
}
?>

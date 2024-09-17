<!-- <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize it
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Set recipient and subject
    $to = "denaa2366@gmail.com"; // Replace with your email address
    $emailSubject = "Contact Form Submission: " . $subject;

    // Prepare email body
    $body = "You have received a new message from the user $name.\n\n".
            "Email: $email\n".
            "Phone: $phone\n\n".
            "Message:\n$message";

    // Set email headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $emailSubject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?> -->

//Contact Form in PHP
<?php
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    if(!empty($email) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $receiver = "denaa2366@gmail.com"; //enter that email address where you want to receive all messages
        $subject = "From: $name <$email>";
        $body = "You have received a new message from the user $name.\n\n".
        "Email: $email\n".
        "Phone: $phone\n\n".
        "Message:\n$message";      $sender = "From: $email";
        if(mail($receiver, $subject, $body, $sender)){
            echo "Your message has been sent";
        }else{
            echo "Sorry, failed to send your message!";
        }
        }else{
        echo "Enter a valid email address!";
        }
    }else{
        echo "Email and message field is required!";
    }
?>

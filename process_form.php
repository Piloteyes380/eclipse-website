<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    // Recipient email
    $to = 'aly@eclipsegroupafrica.com';
    
    // Email subject
    $email_subject = 'Contact Form Submission: ' . $subject;
    
    // Email body
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message";
    
    // Email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";
    
    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<p>Thank you for contacting us. We will get back to you soon.</p>";
    } else {
        echo "<p>Sorry, something went wrong. Please try again later.</p>";
    }
} else {
    echo "<p>Invalid request method.</p>";
}
?>

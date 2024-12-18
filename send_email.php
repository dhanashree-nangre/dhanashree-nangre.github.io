<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email details
    $to = "dhanashreenangre@gmail.com";  // Replace with your email
    $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n" . "Content-Type: text/html; charset=UTF-8";

    // Email content
    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "<h3>Contact Form Submission</h3>
                   <p><strong>Name:</strong> $name</p>
                   <p><strong>Email:</strong> $email</p>
                   <p><strong>Subject:</strong> $subject</p>
                   <p><strong>Message:</strong></p>
                   <p>$message</p>";

    // Debugging: Show the collected data
    echo "<h3>Debugging Information:</h3>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Subject:</strong> $subject</p>";
    echo "<p><strong>Message:</strong></p>";
    echo "<p>$message</p>";

    // Send email and check if it was successful
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<p>Thank you for your message. We will get back to you soon.</p>";
    } else {
        echo "<p>Error sending message. Please try again later.</p>";
    }
}
?>

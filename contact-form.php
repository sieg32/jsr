<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Prepare email message
$to = "yogeshmalviya554@email.com"; // Replace with your client's email address
$email_subject = "New Message from Contact Form: " . $subject;
$email_body = "Name: " . $name . "\n";
$email_body .= "Email: " . $email . "\n\n";
$email_body .= "Message: " . $message;

// Send email
if (mail($to, $email_subject, $email_body)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}

// Optional: Redirect or display a success message

?>
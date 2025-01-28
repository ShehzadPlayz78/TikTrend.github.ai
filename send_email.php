<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tiktok_url = $_POST['tiktok_url'];
    $message = $_POST['message'];

    // Email details
    $to = "ffshehzad9@gmail.com";  // Apna email address yahan daalein
    $subject = "New TikTok Views Boost Request";
    $body = "New Request:\n\nName: $name\nEmail: $email\nTikTok Video URL: $tiktok_url\nMessage: $message";
    $headers = "From: ffshehzadff@gmail.com";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Thank you! Your request has been received.</p>";
    } else {
        echo "<p>Sorry, there was an error processing your request. Please try again later.</p>";
    }
}
?>

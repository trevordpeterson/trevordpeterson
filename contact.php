<?php

if($_POST["submit"]) {
    $recipient="bal247@cornell.edu";
    $subject="Website Form Submission";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["your message"];

    $mailBody="Name: $sender\nEmail: $email\n\n$your message";

    mail($recipient, $subject, $mailBody, "From: $sender <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

<?php

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = 'From: My Portfolio Website';
    $to = 'corrina.lichthardt@gmail.com';

    $body = "From: $firstname $lastname\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
        if (mail($to, $subject, $body, $from)) {
            echo '<p>Your message has been sent!</p>';
        } else {
            echo '<p>Something went wrong, go back and try again!</p>';
        }
    }

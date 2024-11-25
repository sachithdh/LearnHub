<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;


class ContactController
{
    public function __construct(private TemplateEngine $view) {}

    public function sendEmail()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            $to = 'dinukasahan2001@gmail.com';
            $subject = "Contact Form Submission from $name";
            $body = "Name: $name\nEmail: $email\nMessage:\n$message";
            $headers = "From: $email\r\n";

            if (mail($to, $subject, $body, $headers)) {
                echo "Message sent successfully!";
            } else {
                echo "Failed to send the message.";
            }
        }
    }
}

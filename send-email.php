<?php

require __DIR__.'/vendor/autoload.php';

use \App\Communication\Email;

$senderName = $_POST['name'];
$senderEmail = $_POST['email'];
$address = 'globetek.contato@gmail.com';
$subject = 'Globetek Contact Form';
$body = $_POST['message'];

$obEmail = new Email;
$success = $obEmail -> sendEmail($senderName, $senderEmail, $address, $subject, $body);

$positiveFeedback = "<script LANGUAGE='JavaScript'>
    window.alert('Message sent successfully');
    window.location.href='index.php';
    </script>";

$negativeFeedback = "<script LANGUAGE='JavaScript'>
    window.alert('Something went wrong');
    window.location.href='index.php';
    </script>";

echo $success ? ($positiveFeedback) : ($negativeFeedback);

# $obEmail -> getError()